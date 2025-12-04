@extends('layouts.app')

@section('title', 'NIRD - Numérique Responsable pour l\'Éducation')

@section('content')
<!-- Hero Section -->
<section class="relative gradient-nird text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v6h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 60px 60px;"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
            <div class="inline-flex items-center bg-red-600 bg-opacity-80 px-6 py-3 rounded-full mb-6 animate-pulse" x-show="show" x-transition.delay.100ms>
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
                <span class="font-bold">Windows 10 : Fin du support le 14 octobre 2025</span>
            </div>
            <div class="text-7xl mb-6" x-show="show" x-transition.delay.200ms>🏫</div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6" x-show="show" x-transition.delay.300ms>
                Numérique Responsable<br>pour l'Éducation
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100 max-w-3xl mx-auto" x-show="show" x-transition.delay.400ms>
                Accompagnez votre établissement vers Linux et l'Open Source : économique, sécurisé et pédagogique
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" x-show="show" x-transition.delay.500ms>
                <a href="{{ route('quiz') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    Faire le quiz
                </a>
                <a href="{{ route('linux.migration') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-blue-600 transition-colors inline-flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Migrer vers Linux
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Principes NIRD -->
<section id="principes" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Les 4 Piliers de NIRD</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Une approche holistique pour un numérique au service de tous</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Numérique -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl hover:shadow-xl transition-shadow" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mb-4 transition-transform" :class="{ 'scale-110': hover }">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Numérique</h3>
                <p class="text-gray-600">Exploiter le potentiel des technologies pour innover et créer de la valeur.</p>
            </div>

            <!-- Inclusif -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl hover:shadow-xl transition-shadow" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mb-4 transition-transform" :class="{ 'scale-110': hover }">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Inclusif</h3>
                <p class="text-gray-600">Garantir l'accessibilité et l'inclusion pour tous les utilisateurs, sans exception.</p>
            </div>

            <!-- Responsable -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-xl hover:shadow-xl transition-shadow" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="w-16 h-16 bg-purple-600 rounded-lg flex items-center justify-center mb-4 transition-transform" :class="{ 'scale-110': hover }">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Responsable</h3>
                <p class="text-gray-600">Adopter des pratiques éthiques et respectueuses des données personnelles.</p>
            </div>

            <!-- Durable -->
            <div class="bg-gradient-to-br from-teal-50 to-teal-100 p-8 rounded-xl hover:shadow-xl transition-shadow" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="w-16 h-16 bg-teal-600 rounded-lg flex items-center justify-center mb-4 transition-transform" :class="{ 'scale-110': hover }">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Durable</h3>
                <p class="text-gray-600">Minimiser l'impact environnemental et favoriser la sobriété numérique.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi NIRD -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Pourquoi adopter NIRD ?</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Impact social positif</h3>
                            <p class="mt-2 text-gray-600">Créez des services numériques accessibles à tous, sans discrimination.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-600 text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Réduction de l'empreinte carbone</h3>
                            <p class="mt-2 text-gray-600">Optimisez vos ressources et diminuez l'impact environnemental.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-600 text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Conformité réglementaire</h3>
                            <p class="mt-2 text-gray-600">Respectez les normes RGPD, WCAG et les bonnes pratiques du secteur.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 lg:mt-0">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Commencez dès aujourd'hui</h3>
                    <p class="text-gray-600 mb-6">Évaluez votre maturité NIRD en quelques minutes et obtenez des recommandations personnalisées.</p>
                    <a href="{{ route('evaluation') }}" class="block w-full text-center gradient-nird text-white px-6 py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                        Lancer l'auto-évaluation
                    </a>
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-500 text-center">Gratuit • Sans inscription • Résultats immédiats</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Le numérique en chiffres</h2>
            <p class="text-xl text-gray-600">L'urgence d'agir pour un numérique responsable</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6" x-data="{ count: 0 }" x-intersect="$el.querySelector('span').textContent = '4%'">
                <div class="text-5xl font-bold gradient-nird bg-clip-text text-transparent mb-2">
                    <span>0</span>
                </div>
                <p class="text-gray-600">Des émissions mondiales de GES proviennent du numérique</p>
            </div>
            <div class="text-center p-6" x-data="{ count: 0 }" x-intersect="$el.querySelector('span').textContent = '15%'">
                <div class="text-5xl font-bold gradient-nird bg-clip-text text-transparent mb-2">
                    <span>0</span>
                </div>
                <p class="text-gray-600">De la population mondiale a un handicap</p>
            </div>
            <div class="text-center p-6" x-data="{ count: 0 }" x-intersect="$el.querySelector('span').textContent = '70%'">
                <div class="text-5xl font-bold gradient-nird bg-clip-text text-transparent mb-2">
                    <span>0</span>
                </div>
                <p class="text-gray-600">Des sites web ne sont pas accessibles</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-nird">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Prêt à transformer votre approche du numérique ?</h2>
        <p class="text-xl text-blue-100 mb-8">Rejoignez le mouvement NIRD et contribuez à un avenir numérique plus inclusif, responsable et durable.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('evaluation') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Auto-évaluation
            </a>
            <a href="{{ route('resources') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                Explorer les ressources
            </a>
        </div>
    </div>
</section>
@endsection
