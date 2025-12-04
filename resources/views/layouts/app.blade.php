<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NIRD - Numérique Inclusif Responsable Durable">
    <title>@yield('title', 'NIRD - Numérique Inclusif Responsable Durable')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50" x-data="{ mobileMenuOpen: false }">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50" role="navigation" aria-label="Navigation principale">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="/icon.png" alt="NIRD" class="w-10 h-10" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="w-10 h-10 gradient-nird rounded-lg flex items-center justify-center" style="display: none;">
                            <span class="text-white font-bold text-xl">N</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-4">
                    <a href="{{ route('solution') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors {{ request()->routeIs('solution') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                        Solution
                    </a>
                    <a href="{{ route('sensibilisation') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors {{ request()->routeIs('sensibilisation') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                        Sensibilisation
                    </a>
                    <a href="{{ route('alternatives') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors {{ request()->routeIs('alternatives') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                        Alternatives
                    </a>
                    <a href="{{ route('blog') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors {{ request()->routeIs('blog') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                        Blog
                    </a>
                    <a href="{{ route('quiz') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors {{ request()->routeIs('quiz') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                        Quiz
                    </a>
                    <a href="{{ route('contact') }}" class="gradient-nird text-white px-4 py-2 rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                        Contact
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-gray-700 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 rounded-md p-2" aria-label="Menu mobile" :aria-expanded="mobileMenuOpen">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('solution') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 {{ request()->routeIs('solution') ? 'bg-blue-50 text-blue-600' : '' }}">
                    Solution
                </a>
                <a href="{{ route('sensibilisation') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 {{ request()->routeIs('sensibilisation') ? 'bg-blue-50 text-blue-600' : '' }}">
                    Sensibilisation
                </a>
                <a href="{{ route('alternatives') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 {{ request()->routeIs('alternatives') ? 'bg-blue-50 text-blue-600' : '' }}">
                    Alternatives
                </a>
                <a href="{{ route('blog') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 {{ request()->routeIs('blog') ? 'bg-blue-50 text-blue-600' : '' }}">
                    Blog
                </a>
                <a href="{{ route('quiz') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 {{ request()->routeIs('quiz') ? 'bg-blue-50 text-blue-600' : '' }}">
                    Quiz
                </a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 {{ request()->routeIs('contact') ? 'bg-blue-50 text-blue-600' : '' }}">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">NIRD</h3>
                    <p class="text-gray-400 text-sm">Numérique Inclusif, Responsable et Durable pour un avenir meilleur.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="{{ route('quiz') }}" class="text-gray-400 hover:text-white transition-colors">Quiz</a></li>
                        <li><a href="{{ route('blog') }}" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <p class="text-gray-400 text-sm">Contactez-nous pour en savoir plus sur la démarche NIRD.</p>
                    <a href="{{ route('contact') }}" class="inline-block mt-4 bg-violet-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-violet-700 transition-colors">
                        Nous contacter
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} NIRD. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>
