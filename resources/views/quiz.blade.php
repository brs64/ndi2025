@extends('layouts.app')

@section('title', 'Quiz NIRD - Testez vos connaissances')

@section('content')
<div class="bg-gradient-to-b from-white via-white to-white min-h-screen py-12" style="background: linear-gradient(to bottom, rgba(5, 150, 105, 0.05), white);">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center bg-nird-green-light px-6 py-3 rounded-full mb-4">
                <svg class="w-6 h-6 text-nird-green mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
                <span class="font-semibold text-nird-green">Quiz de connaissances</span>
            </div>
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Testez vos connaissances NIRD</h1>
            <p class="text-xl text-gray-600">Répondez aux questions pour évaluer votre compréhension du numérique responsable</p>
        </div>

        <!-- Quiz Application -->
        <div x-data="quizApp()" class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <!-- Progress Bar -->
            <div class="bg-nird-green p-6">
                <div class="flex justify-between items-center mb-3">
                    <span class="text-white font-semibold">Question <span x-text="currentQuestion + 1"></span> sur <span x-text="questions.length"></span></span>
                    <span class="text-white font-semibold" x-text="Math.round(progress) + '%'"></span>
                </div>
                <div class="w-full bg-white bg-opacity-30 rounded-full h-3">
                    <div class="bg-white h-3 rounded-full transition-all duration-500" :style="'width: ' + progress + '%'"></div>
                </div>
            </div>

            <!-- Quiz Content -->
            <div class="p-8">
                <!-- Questions -->
                <div x-show="!showResults">
                    <template x-for="(question, qIndex) in questions" :key="qIndex">
                        <div x-show="currentQuestion === qIndex" x-transition class="space-y-6">
                            <!-- Question Icon & Title -->
                            <div class="text-center mb-8">
                                <div class="text-7xl mb-4" x-text="question.icon"></div>
                                <h2 class="text-3xl font-bold text-gray-900 mb-3" x-text="question.question"></h2>
                            </div>

                            <!-- Answers -->
                            <div class="space-y-3">
                                <template x-for="(answer, aIndex) in question.answers" :key="aIndex">
                                    <button @click="selectAnswer(qIndex, aIndex)"
                                            :class="selectedAnswers[qIndex] === aIndex ? 'border-nird-green bg-nird-green-light ring-2 ring-nird-green' : 'border-gray-300 hover:border-nird-green hover:bg-gray-50'"
                                            class="w-full p-4 border-2 rounded-xl text-left transition-all">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center mr-4"
                                                 :class="selectedAnswers[qIndex] === aIndex ? 'bg-nird-green text-white' : 'bg-gray-100'">
                                                <span class="font-bold" x-text="String.fromCharCode(65 + aIndex)"></span>
                                            </div>
                                            <div class="flex-1">
                                                <div class="font-semibold text-gray-900" x-text="answer.text"></div>
                                            </div>
                                            <div x-show="selectedAnswers[qIndex] === aIndex">
                                                <svg class="w-6 h-6 text-nird-green" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </template>
                            </div>

                            <!-- Navigation -->
                            <div class="flex justify-between items-center pt-6 mt-8 border-t border-gray-200">
                                <button @click="previousQuestion()"
                                        x-show="currentQuestion > 0"
                                        class="flex items-center px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition-colors">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    Précédent
                                </button>
                                <div x-show="currentQuestion === 0"></div>

                                <button @click="nextQuestion()"
                                        x-show="currentQuestion < questions.length - 1"
                                        :disabled="selectedAnswers[currentQuestion] === undefined"
                                        :class="selectedAnswers[currentQuestion] !== undefined ? 'gradient-nird text-white hover:opacity-90' : 'bg-gray-300 text-gray-500 cursor-not-allowed'"
                                        class="flex items-center px-6 py-3 rounded-lg font-semibold transition-all">
                                    Suivant
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>

                                <button @click="calculateResults()"
                                        x-show="currentQuestion === questions.length - 1"
                                        :disabled="selectedAnswers[currentQuestion] === undefined"
                                        :class="selectedAnswers[currentQuestion] !== undefined ? 'gradient-nird text-white hover:opacity-90' : 'bg-gray-300 text-gray-500 cursor-not-allowed'"
                                        class="flex items-center px-8 py-3 rounded-lg font-bold text-lg transition-all">
                                    Voir mes résultats
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Results -->
                <div x-show="showResults" x-transition class="space-y-8">
                    <div class="text-center mb-8">
                        <div class="text-7xl mb-4" x-text="score >= 8 ? '🎉' : score >= 5 ? '👍' : '📚'"></div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-3">Vos résultats</h2>
                        <p class="text-xl text-gray-600">Vous avez obtenu <span class="font-bold text-nird-green" x-text="score"></span> sur <span class="font-bold" x-text="questions.length"></span></p>
                    </div>

                    <!-- Score display -->
                    <div class="bg-nird-green-light rounded-xl p-8 border-2 border-nird-green">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900">Votre score</h3>
                            <span class="text-4xl font-bold text-nird-green" x-text="Math.round((score / questions.length) * 100) + '%'"></span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-4">
                            <div class="bg-nird-green h-4 rounded-full transition-all duration-1000" :style="'width: ' + ((score / questions.length) * 100) + '%'"></div>
                        </div>
                        <p class="mt-4 text-gray-700 text-lg" x-text="getScoreMessage()"></p>
                    </div>

                    <!-- Detailed answers -->
                    <div class="bg-white rounded-xl p-8 border-2 border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Correction détaillée</h3>
                        <div class="space-y-6">
                            <template x-for="(question, qIndex) in questions" :key="qIndex">
                                <div class="border-b border-gray-200 pb-6 last:border-0">
                                    <div class="flex items-start mb-3">
                                        <span class="text-2xl mr-3" x-text="question.icon"></span>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900 mb-2" x-text="'Question ' + (qIndex + 1) + ': ' + question.question"></h4>
                                            <div class="space-y-2">
                                                <div class="flex items-center">
                                                    <span class="text-sm text-gray-600 mr-2">Votre réponse :</span>
                                                    <span class="font-semibold"
                                                          :class="selectedAnswers[qIndex] === question.correct ? 'text-nird-green' : 'text-red-600'"
                                                          x-text="question.answers[selectedAnswers[qIndex]].text"></span>
                                                    <svg x-show="selectedAnswers[qIndex] === question.correct" class="w-5 h-5 ml-2 text-nird-green" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <svg x-show="selectedAnswers[qIndex] !== question.correct" class="w-5 h-5 ml-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div x-show="selectedAnswers[qIndex] !== question.correct" class="flex items-center">
                                                    <span class="text-sm text-gray-600 mr-2">Bonne réponse :</span>
                                                    <span class="font-semibold text-nird-green" x-text="question.answers[question.correct].text"></span>
                                                </div>
                                                <p class="text-sm text-gray-600 bg-gray-50 p-3 rounded-lg mt-2" x-text="question.explanation"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <button @click="restartQuiz()" class="flex-1 border-2 border-nird-green text-nird-green px-6 py-4 rounded-lg font-bold text-lg transition-colors flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            Refaire le quiz
                        </button>
                        <a href="{{ route('contact') }}" class="flex-1 gradient-nird text-white px-6 py-4 rounded-lg font-bold text-lg hover:opacity-90 transition-opacity flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Nous contacter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function quizApp() {
    return {
        currentQuestion: 0,
        selectedAnswers: {},
        showResults: false,
        score: 0,
        questions: [
            {
                icon: '🌍',
                question: 'Que signifie l\'acronyme NIRD ?',
                answers: [
                    { text: 'Numérique Inclusif Responsable Durable' },
                    { text: 'Numérique Innovation Recherche Développement' },
                    { text: 'Network Infrastructure Reliable Design' },
                    { text: 'Numérique Interactif Résilient Dynamique' }
                ],
                correct: 0,
                explanation: 'NIRD signifie Numérique Inclusif Responsable Durable. Ces quatre piliers représentent les valeurs fondamentales de la démarche.'
            },
            {
                icon: '📊',
                question: 'Quel pourcentage des émissions mondiales de gaz à effet de serre représente le numérique ?',
                answers: [
                    { text: '1%' },
                    { text: '4%' },
                    { text: '10%' },
                    { text: '15%' }
                ],
                correct: 1,
                explanation: 'Le numérique représente 4% des émissions mondiales de GES, un chiffre qui continue d\'augmenter avec la croissance du secteur.'
            },
            {
                icon: '⚙️',
                question: 'Quel pourcentage de l\'impact écologique d\'un appareil numérique est lié à sa fabrication ?',
                answers: [
                    { text: '30%' },
                    { text: '50%' },
                    { text: '65%' },
                    { text: '80%' }
                ],
                correct: 3,
                explanation: '80% de l\'impact écologique d\'un appareil est lié à sa fabrication. C\'est pourquoi prolonger la durée de vie du matériel est si important.'
            },
            {
                icon: '🐧',
                question: 'Quelle distribution Linux est spécialement adaptée pour les écoles primaires ?',
                answers: [
                    { text: 'Ubuntu' },
                    { text: 'Linux NIRD' },
                    { text: 'PrimTux' },
                    { text: 'Debian' }
                ],
                correct: 2,
                explanation: 'PrimTux est une distribution GNU/Linux spécialement développée pour les écoles primaires, avec des ressources pédagogiques adaptées aux 3 cycles.'
            },
            {
                icon: '🎓',
                question: 'Quelle distribution Linux est adaptée au collège et lycée, notamment pour l\'enseignement NSI ?',
                answers: [
                    { text: 'Linux Mint' },
                    { text: 'Linux NIRD' },
                    { text: 'Fedora' },
                    { text: 'Manjaro' }
                ],
                correct: 1,
                explanation: 'Linux NIRD est une distribution GNU/Linux légère adaptée au collège et lycée, avec une suite complète de logiciels libres pour usage scolaire, dont NSI.'
            },
            {
                icon: '💰',
                question: 'Quel est le prix approximatif d\'une licence Windows 10/11 par poste ?',
                answers: [
                    { text: '50€' },
                    { text: '95€' },
                    { text: '145€' },
                    { text: '200€' }
                ],
                correct: 2,
                explanation: 'Une licence Windows 10/11 coûte environ 145€ par poste, ce qui représente une économie importante en passant aux logiciels libres.'
            },
            {
                icon: '♻️',
                question: 'Qu\'est-ce que la sobriété numérique ?',
                answers: [
                    { text: 'Utiliser internet moins de 2h par jour' },
                    { text: 'Adopter une utilisation raisonnée des technologies pour réduire leur impact' },
                    { text: 'N\'utiliser que des appareils reconditionnés' },
                    { text: 'Désactiver toutes les notifications' }
                ],
                correct: 1,
                explanation: 'La sobriété numérique consiste à adopter une utilisation plus raisonnée et responsable des technologies numériques pour réduire leur impact environnemental et social.'
            },
            {
                icon: '🔄',
                question: 'Parmi ces actions, laquelle contribue le plus à réduire l\'impact environnemental du numérique ?',
                answers: [
                    { text: 'Supprimer ses emails régulièrement' },
                    { text: 'Prolonger la durée de vie du matériel' },
                    { text: 'Éteindre son ordinateur tous les soirs' },
                    { text: 'Utiliser le mode sombre' }
                ],
                correct: 1,
                explanation: 'Prolonger la durée de vie du matériel est l\'action la plus impactante, car 80% de l\'impact environnemental vient de la fabrication.'
            },
            {
                icon: '🤝',
                question: 'Qu\'est-ce que la co-construction dans la démarche NIRD ?',
                answers: [
                    { text: 'Construire ensemble les bâtiments scolaires' },
                    { text: 'Une démarche participative impliquant tous les acteurs de l\'établissement' },
                    { text: 'Coder à plusieurs sur le même projet' },
                    { text: 'Partager les coûts d\'infrastructure' }
                ],
                correct: 1,
                explanation: 'La co-construction est une démarche participative qui implique tous les acteurs (enseignants, élèves, direction, collectivités) pour identifier les besoins et créer des solutions adaptées.'
            },
            {
                icon: '🌱',
                question: 'D\'ici 2030, comment évoluera le nombre d\'équipements numériques selon les projections ?',
                answers: [
                    { text: 'Il restera stable' },
                    { text: 'Il augmentera de 50%' },
                    { text: 'Il doublera (x2)' },
                    { text: 'Il triplera (x3)' }
                ],
                correct: 2,
                explanation: 'Le nombre d\'équipements numériques devrait doubler d\'ici 2030, ce qui rend d\'autant plus urgent l\'adoption d\'une démarche numérique responsable.'
            }
        ],
        get progress() {
            return ((this.currentQuestion + 1) / this.questions.length) * 100;
        },
        selectAnswer(questionIndex, answerIndex) {
            this.selectedAnswers[questionIndex] = answerIndex;
        },
        nextQuestion() {
            if (this.currentQuestion < this.questions.length - 1) {
                this.currentQuestion++;
            }
        },
        previousQuestion() {
            if (this.currentQuestion > 0) {
                this.currentQuestion--;
            }
        },
        calculateResults() {
            this.score = 0;
            for (let i = 0; i < this.questions.length; i++) {
                if (this.selectedAnswers[i] === this.questions[i].correct) {
                    this.score++;
                }
            }
            this.showResults = true;
        },
        getScoreMessage() {
            const percentage = (this.score / this.questions.length) * 100;
            if (percentage === 100) {
                return 'Parfait ! Vous maîtrisez parfaitement les concepts du numérique responsable.';
            } else if (percentage >= 80) {
                return 'Excellent ! Vous avez une très bonne compréhension de la démarche NIRD.';
            } else if (percentage >= 60) {
                return 'Bien ! Vous connaissez les bases du numérique responsable, continuez à vous informer.';
            } else if (percentage >= 40) {
                return 'Pas mal ! Il y a encore des concepts à approfondir, explorez davantage le site.';
            } else {
                return 'Découvrez le site pour en apprendre plus sur le numérique responsable et durable.';
            }
        },
        restartQuiz() {
            this.currentQuestion = 0;
            this.selectedAnswers = {};
            this.showResults = false;
            this.score = 0;
        }
    }
}
</script>
@endsection
