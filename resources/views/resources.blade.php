@extends('layouts.app')

@section('title', 'Ressources NIRD')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Ressources NIRD</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Guides, outils et références pour adopter les meilleures pratiques</p>
        </div>

        <!-- Filter Section -->
        <div class="mb-12" x-data="{ selectedCategory: 'all' }">
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button @click="selectedCategory = 'all'"
                        :class="selectedCategory === 'all' ? 'gradient-nird text-white' : 'bg-white text-gray-700 hover:bg-gray-50'"
                        class="px-6 py-2 rounded-lg font-medium transition-colors border border-gray-200">
                    Toutes
                </button>
                <button @click="selectedCategory = 'inclusif'"
                        :class="selectedCategory === 'inclusif' ? 'bg-green-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50'"
                        class="px-6 py-2 rounded-lg font-medium transition-colors border border-gray-200">
                    Inclusif
                </button>
                <button @click="selectedCategory = 'responsable'"
                        :class="selectedCategory === 'responsable' ? 'bg-purple-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50'"
                        class="px-6 py-2 rounded-lg font-medium transition-colors border border-gray-200">
                    Responsable
                </button>
                <button @click="selectedCategory = 'durable'"
                        :class="selectedCategory === 'durable' ? 'bg-teal-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50'"
                        class="px-6 py-2 rounded-lg font-medium transition-colors border border-gray-200">
                    Durable
                </button>
            </div>

            <!-- Resources Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Guide WCAG -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'inclusif'" x-transition class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-green-400 to-green-600 p-6">
                        <div class="flex items-center justify-between">
                            <span class="bg-white text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Guide</span>
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-green-600 uppercase tracking-wide">Numérique Inclusif</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">Guide WCAG 2.1</h3>
                        <p class="text-gray-600 mb-4">Standards internationaux pour l'accessibilité web. Apprenez à rendre vos services accessibles à tous.</p>
                        <a href="https://www.w3.org/WAI/WCAG21/quickref/" target="_blank" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                            En savoir plus
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- RGAA -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'inclusif'" x-transition class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-green-400 to-green-600 p-6">
                        <div class="flex items-center justify-between">
                            <span class="bg-white text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Référentiel</span>
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-green-600 uppercase tracking-wide">Numérique Inclusif</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">RGAA 4.1</h3>
                        <p class="text-gray-600 mb-4">Référentiel Général d'Amélioration de l'Accessibilité pour les administrations françaises.</p>
                        <a href="https://accessibilite.numerique.gouv.fr/" target="_blank" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                            En savoir plus
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- GR491 -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'responsable'" x-transition class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-6">
                        <div class="flex items-center justify-between">
                            <span class="bg-white text-purple-600 px-3 py-1 rounded-full text-sm font-semibold">Guide</span>
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-purple-600 uppercase tracking-wide">Numérique Responsable</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">Référentiel GR491</h3>
                        <p class="text-gray-600 mb-4">Guide de bonnes pratiques pour un numérique responsable et éco-conçu.</p>
                        <a href="https://gr491.isit-europe.org/" target="_blank" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium">
                            En savoir plus
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- RGPD -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'responsable'" x-transition class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-6">
                        <div class="flex items-center justify-between">
                            <span class="bg-white text-purple-600 px-3 py-1 rounded-full text-sm font-semibold">Référentiel</span>
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-purple-600 uppercase tracking-wide">Numérique Responsable</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">Guide RGPD</h3>
                        <p class="text-gray-600 mb-4">Comprendre et appliquer le Règlement Général sur la Protection des Données.</p>
                        <a href="https://www.cnil.fr/fr/rgpd-de-quoi-parle-t-on" target="_blank" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium">
                            En savoir plus
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- ADEME -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'durable'" x-transition class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-teal-400 to-teal-600 p-6">
                        <div class="flex items-center justify-between">
                            <span class="bg-white text-teal-600 px-3 py-1 rounded-full text-sm font-semibold">Étude</span>
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-teal-600 uppercase tracking-wide">Numérique Durable</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">Impact environnemental du numérique</h3>
                        <p class="text-gray-600 mb-4">Étude complète de l'ADEME sur l'empreinte écologique du secteur numérique.</p>
                        <a href="https://www.ademe.fr/expertises/numerique" target="_blank" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-medium">
                            En savoir plus
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- EcoIndex -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'durable'" x-transition class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-teal-400 to-teal-600 p-6">
                        <div class="flex items-center justify-between">
                            <span class="bg-white text-teal-600 px-3 py-1 rounded-full text-sm font-semibold">Outil</span>
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-teal-600 uppercase tracking-wide">Numérique Durable</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">EcoIndex</h3>
                        <p class="text-gray-600 mb-4">Outil de mesure de l'empreinte environnementale des pages web.</p>
                        <a href="https://www.ecoindex.fr/" target="_blank" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-medium">
                            En savoir plus
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Resources Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Aller plus loin</h2>
            <p class="text-xl text-gray-600">Outils et communautés pour approfondir vos connaissances</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Formations recommandées</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Certification Accessibilité Numérique</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Formation Numérique Responsable</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Éco-conception de services numériques</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Communautés et réseaux</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Institut du Numérique Responsable</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Designers Éthiques</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Green IT France</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
