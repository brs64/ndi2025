console.log("Snake script running")

var canvas;
var ctx;

var snakeX = 30;
var snakeY = 30;
var snakeSizeDiv = 0.03;

// Snake body segments
var segments = [{x: 30, y: 30}];

var lastTime = 0;
let accumulator = 0;

const moveInterval = 50;
const step = 6;

let direction = { x: 1, y: 0 };
let nextDir   = { x: 1, y: 0 };

var gameData = {};
var graceFrames = 30;

var cleanedUrl = new URL(window.location.href).origin + new URL(window.location.href).pathname;

function clearCanvas()
{
    // Dark magic
    canvas.width = canvas.width;
}

function resizeCanvas() {
  const ratioX = snakeX / canvas.width;
  const ratioY = snakeY / canvas.height;

  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  snakeX = ratioX * canvas.width;
  snakeY = ratioY * canvas.height;
}

function init()
{
    // Tag every element
    document.querySelectorAll('*').forEach((el, i) => {
        el.dataset.gid = i;
    });

    // Load gameData from localStorage
    const saved = localStorage.getItem('snakeGameData');
    if (saved) {
        gameData = JSON.parse(saved);

        // Restore snake segments if saved
        if (gameData._segments && gameData._segments.length > 0) {
            segments = gameData._segments;
            // Offset Y to avoid triggering navbar again
            const yOffset = 100;
            segments.forEach(seg => seg.y += yOffset);
            snakeX = segments[0].x;
            snakeY = segments[0].y;
        }
    }

    // Delete elements in game data
    if (gameData[cleanedUrl]) {
        gameData[cleanedUrl].forEach(gid => {
            const el = document.querySelector(`[data-gid="${gid}"]`);
            if (el) el.remove();
        });
    }

    // Create game bar
    const gameBar = document.createElement("div");
    gameBar.id = "snake-game-bar";
    gameBar.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 40px;
        background: rgba(0, 0, 0, 0.8);
        color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        box-sizing: border-box;
        font-family: sans-serif;
        font-size: 14px;
        z-index: 2147483647;
    `;

    const scoreDisplay = document.createElement("span");
    scoreDisplay.id = "snake-score";
    scoreDisplay.textContent = "Eaten: " + (segments.length - 1);

    const btnContainer = document.createElement("div");

    const resetBtn = document.createElement("button");
    resetBtn.textContent = "Reset Game";
    resetBtn.style.cssText = "margin-right: 10px; padding: 5px 10px; cursor: pointer;";
    resetBtn.onclick = () => {
        localStorage.removeItem('snakeGameData');
        window.location.reload();
    };

    const exitBtn = document.createElement("button");
    exitBtn.textContent = "Exit Snake";
    exitBtn.style.cssText = "padding: 5px 10px; cursor: pointer;";
    exitBtn.onclick = () => {
        localStorage.removeItem('snakeGameData');
        localStorage.removeItem('snakeActive');
        window.location.href = window.location.origin + window.location.pathname;
    };

    btnContainer.appendChild(resetBtn);
    btnContainer.appendChild(exitBtn);
    gameBar.appendChild(scoreDisplay);
    gameBar.appendChild(btnContainer);
    document.body.insertBefore(gameBar, document.body.firstChild);

    // Push page content down so it's not under the bar
    document.body.style.paddingTop = "40px";

    // Create canvas element
    canvas = document.createElement("canvas");
    canvas.style.position = "fixed";
    canvas.style.x = 0;
    canvas.style.y = 0;
    canvas.style.backgroundColor = "transparent";
    canvas.style.zIndex = "2147483646";
    canvas.style.imageRendering = "crisp-edges";
    canvas.style.pointerEvents = "auto";

    ctx = canvas.getContext("2d");

    // Append as first child in the body
    let firstChild = document.body.firstChild;
    document.body.insertBefore(canvas, firstChild);

    // Handle canvas resize on window resize
    resizeCanvas();
    window.addEventListener("resize", resizeCanvas);

    // Register input handlers

    // Prevent manual scrolling
    document.body.style.overflow = "hidden";
    window.addEventListener("wheel", (e) => { e.preventDefault(); }, { passive: false });
    window.addEventListener("touchmove", e => e.preventDefault(), { passive: false });

    window.addEventListener("keydown", (e) => {
        e.preventDefault(); // Prevent scroll on keydown

        if (e.key === "ArrowUp"    && direction.y !== 1)  nextDir = { x: 0, y: -1 };
        if (e.key === "ArrowDown"  && direction.y !== -1) nextDir = { x: 0, y:  1 };
        if (e.key === "ArrowLeft"  && direction.x !== 1)  nextDir = { x: -1, y:  0 };
        if (e.key === "ArrowRight" && direction.x !== -1) nextDir = { x: 1,  y:  0 };
    });

    drawSnake()
}

function drawSnake()
{
    const ctx = canvas.getContext("2d");
    const size = canvas.width * snakeSizeDiv;

    // Draw all segments
    segments.forEach((seg, i) => {
        // Head is brighter, tail gets darker
        ctx.fillStyle = i === 0 ? "#ff0000" : `hsl(0, 100%, ${Math.max(20, 50 - i * 3)}%)`;
        ctx.fillRect(seg.x, seg.y, size, size);
    });

    requestAnimationFrame(gameUpdate);
}

function growSnake() {
    // Add segment at tail position
    const tail = segments[segments.length - 1];
    segments.push({x: tail.x, y: tail.y});

    // Update score display
    const score = document.getElementById("snake-score");
    if (score) score.textContent = "Eaten: " + (segments.length - 1);
}

function checkSelfCollision() {
    // Grace period on spawn
    if (graceFrames > 0) {
        graceFrames--;
        return false;
    }

    // Need a long snake before collision matters
    if (segments.length < 30) return false;

    const head = segments[0];
    const size = canvas.width * snakeSizeDiv;

    // Skip first 25 segments - can only hit distant tail
    for (let i = 25; i < segments.length; i++) {
        const seg = segments[i];
        if (Math.abs(head.x - seg.x) < size && Math.abs(head.y - seg.y) < size) {
            return true;
        }
    }
    return false;
}

function gameOver() {
    segments = [{x: 30, y: 30}];
    snakeX = 30;
    snakeY = 30;
    direction = { x: 1, y: 0 };
    nextDir = { x: 1, y: 0 };

    if (gameData[cleanedUrl]) {
        delete gameData[cleanedUrl];
    }
    delete gameData._segments;

    localStorage.setItem('snakeGameData', JSON.stringify(gameData));
    window.location.reload();
}

function moveSnake() {
    // Move body: each segment takes position of the one before it
    for (let i = segments.length - 1; i > 0; i--) {
        segments[i].x = segments[i-1].x;
        segments[i].y = segments[i-1].y;
    }

    // Move head
    segments[0].x += direction.x * step;
    segments[0].y += direction.y * step;

    // Update snakeX/Y to match head
    snakeX = segments[0].x;
    snakeY = segments[0].y;
}

function getElementsUnderSnake(canvas, snakeX, snakeY, snakeWidth, snakeHeight) {
    const canvasRect = canvas.getBoundingClientRect();

    // Snake rect projected in screen coordinates
    const snakeRect = {
      left: canvasRect.left + snakeX,
      top: canvasRect.top + snakeY,
      right: canvasRect.left + snakeX + snakeWidth,
      bottom: canvasRect.top + snakeY + snakeHeight
    };

    // Elements the snake should be able to interact with
    const targets = document.querySelectorAll('h1,h2,h3,h4,p,li,a');

    return [...targets].filter(el => {
      const r = el.getBoundingClientRect();
      return r.left < snakeRect.right &&
             r.right > snakeRect.left &&
             r.top < snakeRect.bottom &&
             r.bottom > snakeRect.top;
    });
}

function gameUpdate(time)
{
   clearCanvas();

   // Delta time
   const delta = time - lastTime;
   lastTime = time;

   // Update accumulator
   accumulator += delta;

   const size = canvas.width * snakeSizeDiv;

   // Move with step
   while (accumulator >= moveInterval) {
    direction = nextDir;

    // Scroll sections
    let cancelMovement = false;
    const scrollTop = window.scrollY; // current scroll position
    const scrollHeight = document.documentElement.scrollHeight; // total content height
    const clientHeight = document.documentElement.clientHeight; // viewport height

    if (nextDir.y == -1 && nextDir.x == 0 && snakeY + direction.y <= canvas.height / 4) {
        // Scroll up if we can scroll up
        if (scrollTop > 0)
        {
            cancelMovement = true;
            window.scrollBy(
                {
                    left: 0,
                    top: -step
                }
            );
        }
    }
    if (nextDir.y == 1 && nextDir.x == 0 && snakeY + direction.y >= canvas.height * 0.75) {
        // Scroll down if we can scroll down
        if (scrollTop + clientHeight < scrollHeight)
        {
            cancelMovement = true;
            window.scrollBy(
                {
                    left: 0,
                    top: step
                }
            );
        }
    }

    // Teleport on borders (head only)
    if (segments[0].x + direction.x * step >= canvas.width) {
        segments[0].x = 0;
    }
    if (segments[0].x + direction.x * step <= 0) {
        segments[0].x = canvas.width;
    }
    if (segments[0].y + direction.y * step >= canvas.height) {
        segments[0].y = 0;
        window.scrollTo({ top: 0 });
    }
    if (segments[0].y + direction.y * step <= 0) {
        segments[0].y = canvas.height;
        window.scrollTo({ top: document.documentElement.scrollHeight });
    }

    // Check if there are elements behind the snake.
    const hits = getElementsUnderSnake(canvas, snakeX, snakeY, size, size);

    hits.forEach(el => {
        // If there is an anchor, navigate to the page with game data as URL parameter
        if (el.tagName.toLowerCase() == "a" && el.getAttribute("href") != "#") {
            // Save snake segments to gameData
            gameData._segments = segments;
            localStorage.setItem('snakeGameData', JSON.stringify(gameData));

            console.log("navigating to: " + el.href);
            window.location.href = el.href;
            return;
        }
        else
        // If not an eligible anchor, make the element invisible and grow the snake by one
        {
            var elGid = el.getAttribute("data-gid");

            if (!gameData[cleanedUrl]) {
                gameData[cleanedUrl] = [];
            }

            gameData[cleanedUrl].push(elGid);

            // Grow the snake
            growSnake();

            el.remove();
        }
    });

    // Apply movement to the snake if we should
    if (!cancelMovement) {
        moveSnake();

        if (checkSelfCollision()) {
            gameOver();
            return;
        }
    }

    accumulator -= moveInterval;
  }

  drawSnake();
}

// Konami code easter egg: up up down down left right left right b a
const konamiCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
let konamiIndex = 0;
let snakeEnabled = false;

// Check if snake was already active (localStorage flag)
if (localStorage.getItem('snakeActive') === 'true') {
    snakeEnabled = true;
    init();
    requestAnimationFrame(drawSnake);
}

document.addEventListener('keydown', (e) => {
    if (snakeEnabled) return;

    if (e.key === konamiCode[konamiIndex]) {
        konamiIndex++;
        if (konamiIndex === konamiCode.length) {
            snakeEnabled = true;
            localStorage.setItem('snakeActive', 'true');
            console.log('🐍 Snake mode activated!');
            init();
            requestAnimationFrame(drawSnake);
        }
    } else {
        konamiIndex = 0;
    }
});
