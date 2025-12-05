@extends('layouts.app')

@section('title', 'Ressources NIRD')

@section('content')
<!-- Hero Section -->
<section class="gradient-nird-blue-violet text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Ressources NIRD</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Tous nos outils et guides pour votre transition numérique responsable</p>
        </div>
    </div>
</section>

<!-- Ressources principales -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Nos ressources principales</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Démarche -->
            <a href="{{ route('solution') }}" class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-all hover:scale-105 border-2 border-transparent hover:border-nird-green">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Démarche NIRD</h3>
                <p class="text-gray-600">
                    Découvrez notre approche globale et les trois étapes clés pour accompagner votre établissement dans sa transition numérique responsable.
                </p>
            </a>

            <!-- Sensibilisation -->
            <a href="{{ route('sensibilisation') }}" class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-all hover:scale-105 border-2 border-transparent hover:border-nird-green">
                <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Sensibilisation</h3>
                <p class="text-gray-600">
                    Ateliers et formations sur la sobriété numérique, le réemploi et le reconditionnement du matériel informatique.
                </p>
            </a>

            <!-- Alternatives -->
            <a href="{{ route('alternatives') }}" class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-all hover:scale-105 border-2 border-transparent hover:border-nird-green">
                <div class="w-16 h-16 bg-nird-green-light rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-nird-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Alternatives Open Source</h3>
                <p class="text-gray-600">
                    Catalogue complet des logiciels libres et systèmes d'exploitation pour remplacer les solutions propriétaires.
                </p>
            </a>

            <!-- Installer Linux -->
            <a href="{{ route('linux.install') }}" class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-all hover:scale-105 border-2 border-transparent hover:border-nird-green">
                <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Installer Linux</h3>
                <p class="text-gray-600">
                    Guides détaillés pas à pas pour installer différentes distributions Linux adaptées à l'éducation.
                </p>
            </a>

            <!-- Quiz -->
            <a href="{{ route('quiz') }}" class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-all hover:scale-105 border-2 border-transparent hover:border-nird-green">
                <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Quiz NIRD</h3>
                <p class="text-gray-600">
                    Testez vos connaissances sur le numérique responsable et les solutions proposées par NIRD.
                </p>
            </a>

            <!-- Contact -->
            <a href="{{ route('contact') }}" class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-all hover:scale-105 border-2 border-transparent hover:border-nird-green">
                <div class="w-16 h-16 bg-pink-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Nous contacter</h3>
                <p class="text-gray-600">
                    Une question ? Besoin d'accompagnement ? N'hésitez pas à nous contacter pour discuter de votre projet.
                </p>
            </a>
        </div>
    </div>
</section>

<!-- Call to action -->
<section class="py-16 bg-gradient-to-r from-nird-green to-nird-green-dark text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Prêt à commencer votre transition ?</h2>
        <p class="text-xl mb-8 opacity-90">
            Découvrez comment NIRD peut accompagner votre établissement dans sa démarche numérique responsable.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('solution') }}" class="bg-white text-nird-green px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-colors">
                Découvrir la démarche
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-nird-green transition-colors">
                Nous contacter
            </a>
        </div>
    </div>
</section>
@endsection
