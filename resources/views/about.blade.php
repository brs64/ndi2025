@extends('layouts.app')

@section('title', 'À propos - NIRD')

@section('content')
<!-- Hero Section -->
<section class="gradient-nird-blue-violet text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">À propos de NIRD</h1>
        </div>
    </div>
</section>

<!-- Présentation vidéo -->
<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Projet NIRD</h2>

        <div class="bg-gray-900 rounded-xl overflow-hidden shadow-2xl mb-8">
            <video class="w-full" controls>
                <source src="/video-presentation.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>
    </div>
</section>

<!-- Divider -->
<div class="border-t-2 border-gray-200"></div>

<!-- Podcast audio -->
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Découvrez aussi notre podcast audio</h2>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8 border-2 border-nird-green">
            <div class="flex items-center gap-6 mb-6">
                <div class="w-24 h-24 bg-nird-green rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Podcast NIRD - Swatted</h3>
                </div>
            </div>

            <audio class="w-full" controls>
                <source src="/podcast-swatted.m4a" type="audio/mp4">
                Votre navigateur ne supporte pas la lecture audio.
            </audio>

            <div class="mt-6 flex items-center gap-2 text-sm text-gray-500">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Utilisez les contrôles pour écouter le podcast</span>
            </div>
        </div>
    </div>
</section>

<!-- Call to action -->
<section class="py-16 bg-gradient-to-r from-nird-green to-nird-green-dark text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Rejoignez le mouvement NIRD</h2>
        <p class="text-xl mb-8 opacity-90">
            Ensemble, construisons un avenir numérique plus responsable et durable pour l'éducation.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-nird-green px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-colors">
                Nous contacter
            </a>
            <a href="{{ route('resources') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-nird-green transition-colors">
                Découvrir nos ressources
            </a>
        </div>
    </div>
</section>
@endsection
