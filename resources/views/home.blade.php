@extends('layouts.app')

@section('title', 'NIRD - Numérique Inclusif Responsable Durable')

@section('content')
<!-- Hero Section -->
<section class="gradient-nird text-white py-32">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            Numérique Inclusif<br>
            Responsable et Durable
        </h1>
        <p class="text-xl md:text-2xl mb-10 text-white/90">
            Accompagnement des établissements vers un numérique éthique et soutenable
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('solution') }}" class="bg-white text-violet-600 px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-colors">
                Notre solution
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-violet-600 transition-colors">
                Nous contacter
            </a>
        </div>
    </div>
</section>

<!-- Les 4 piliers -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Les 4 piliers de NIRD</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Numérique</h3>
                <p class="text-gray-600 text-sm">Technologies au service de l'innovation</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-violet-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Inclusif</h3>
                <p class="text-gray-600 text-sm">Accessibilité pour tous</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-pink-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Responsable</h3>
                <p class="text-gray-600 text-sm">Éthique et respect des données</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Durable</h3>
                <p class="text-gray-600 text-sm">Sobriété numérique</p>
            </div>
        </div>
    </div>
</section>

<!-- Nos services -->
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Nos services</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <a href="{{ route('solution') }}" class="bg-white p-8 rounded-lg hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Solution</h3>
                <p class="text-gray-600">Accompagnement dans votre transition numérique et éco-responsable</p>
            </a>

            <a href="{{ route('sensibilisation') }}" class="bg-white p-8 rounded-lg hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Sensibilisation</h3>
                <p class="text-gray-600">Ateliers sur la sobriété numérique et le reconditionnement</p>
            </a>

            <a href="{{ route('alternatives') }}" class="bg-white p-8 rounded-lg hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Alternatives</h3>
                <p class="text-gray-600">Logiciels libres et systèmes d'exploitation open source</p>
            </a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 gradient-nird text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Prêt à démarrer ?</h2>
        <p class="text-xl mb-8 text-white/90">Découvrez comment nous pouvons vous accompagner</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quiz') }}" class="bg-white text-violet-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors">
                Faire le quiz
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-violet-600 transition-colors">
                Nous contacter
            </a>
        </div>
    </div>
</section>
@endsection
