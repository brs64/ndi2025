@extends('layouts.app')

@section('title', 'Blog NIRD')

@section('content')
<!-- Hero Section -->
<section class="gradient-nird-pink-orange text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Blog & Actualités
            </h1>
            <p class="text-2xl mb-8 text-purple-100 max-w-3xl mx-auto">
                Actualités, ateliers avec des entreprises et retours d'expérience
            </p>
        </div>
    </div>
</section>

<!-- Actualités récentes -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Actualités récentes</h2>
            <p class="text-xl text-gray-600">Suivez les dernières nouvelles de la démarche NIRD</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="text-sm text-gray-500 mb-2">Décembre 2025</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lancement du référentiel NIRD</h3>
                    <p class="text-gray-600 mb-4">
                        Publication officielle du référentiel NIRD pour accompagner les établissements dans leur transition numérique responsable.
                    </p>
                    <div class="inline-flex items-center text-blue-600 font-medium">
                        Lire la suite
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="text-sm text-gray-500 mb-2">Novembre 2025</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fin de support Windows 10</h3>
                    <p class="text-gray-600 mb-4">
                        Microsoft met fin au support de Windows 10 en octobre 2025. C'est le moment de passer à Linux pour vos établissements.
                    </p>
                    <div class="inline-flex items-center text-green-600 font-medium">
                        Lire la suite
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="text-sm text-gray-500 mb-2">Octobre 2025</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Résultats de l'étude d'impact</h3>
                    <p class="text-gray-600 mb-4">
                        Publication des résultats de l'étude sur l'impact environnemental du numérique dans les établissements scolaires français.
                    </p>
                    <div class="inline-flex items-center text-purple-600 font-medium">
                        Lire la suite
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Ateliers avec des entreprises -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Ateliers avec des entreprises</h2>
            <p class="text-xl text-gray-600">Collaborations et partenariats pour le numérique responsable</p>
        </div>

        <div class="space-y-6 max-w-4xl mx-auto">
            <!-- Atelier 1 -->
            <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-2xl font-bold text-gray-900">Atelier Reconditionnement</h3>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-semibold">15 janvier 2026</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Partenariat avec <strong>BackMarket</strong> pour un atelier pratique sur le reconditionnement du matériel informatique. Apprenez à donner une seconde vie à vos équipements et réduire votre empreinte environnementale.
                        </p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Paris • Format hybride
                        </div>
                    </div>
                </div>
            </div>

            <!-- Atelier 2 -->
            <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-2xl font-bold text-gray-900">Migration Linux en pratique</h3>
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">22 février 2026</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            En collaboration avec <strong>Canonical</strong> (Ubuntu), un atelier technique sur la migration progressive vers Linux. Installation, configuration et gestion de parc informatique sous Linux.
                        </p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Lyon • Présentiel
                        </div>
                    </div>
                </div>
            </div>

            <!-- Atelier 3 -->
            <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-2xl font-bold text-gray-900">Mesure d'impact environnemental</h3>
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">10 mars 2026</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Atelier avec <strong>GreenIT.fr</strong> sur la mesure et le pilotage de l'empreinte environnementale de votre système d'information. Outils, méthodologies et bonnes pratiques.
                        </p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                            En ligne
                        </div>
                    </div>
                </div>
            </div>

            <!-- Atelier 4 -->
            <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-2xl font-bold text-gray-900">Logiciels libres pour l'éducation</h3>
                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">5 avril 2026</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Avec <strong>Framasoft</strong> et <strong>La Quadrature du Net</strong>, découvrez l'écosystème des logiciels libres pour l'éducation et leurs avantages pédagogiques, techniques et éthiques.
                        </p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Toulouse • Format hybride
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl p-8 md:p-12 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Restez informé</h2>
            <p class="text-xl text-purple-100 mb-8">
                Inscrivez-vous à notre newsletter pour recevoir les actualités et les invitations aux ateliers
            </p>
            <form class="max-w-md mx-auto">
                <div class="flex gap-4">
                    <input type="email"
                           placeholder="Votre email"
                           class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white"
                           required>
                    <button type="submit"
                            class="bg-white text-purple-600 px-6 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors">
                        S'inscrire
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Proposez un atelier dans votre établissement</h2>
        <p class="text-xl text-gray-600 mb-8">
            Vous souhaitez organiser un atelier NIRD dans votre structure ? Contactez-nous !
        </p>
        <a href="{{ route('contact') }}" class="inline-block gradient-nird text-white px-8 py-4 rounded-lg font-bold hover:opacity-90 transition-opacity">
            Nous contacter
        </a>
    </div>
</section>
@endsection
