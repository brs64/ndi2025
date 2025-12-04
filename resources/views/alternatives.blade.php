@extends('layouts.app')

@section('title', 'Alternatives Open Source')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="text-7xl mb-6">🔄</div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Alternatives Open Source
            </h1>
            <p class="text-2xl mb-8 text-cyan-100 max-w-3xl mx-auto">
                Découvrez les alternatives gratuites et puissantes à tous vos logiciels propriétaires
            </p>
            <div class="inline-flex items-center bg-emerald-900 bg-opacity-50 px-6 py-3 rounded-full">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <span class="font-bold">100% gratuit • 100% open source • 100% fonctionnel</span>
            </div>
        </div>
    </div>
</section>

<!-- Stats rapides -->
<section class="bg-white py-12 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-emerald-600 mb-2">{{ count($categories) }}</div>
                <div class="text-gray-600">Catégories</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-emerald-600 mb-2">
                    {{ collect($categories)->flatten(1)->count() }}
                </div>
                <div class="text-gray-600">Alternatives</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-emerald-600 mb-2">0€</div>
                <div class="text-gray-600">Coût total</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-emerald-600 mb-2">100%</div>
                <div class="text-gray-600">Compatible</div>
            </div>
        </div>
    </div>
</section>

<!-- Search & Filter -->
<section class="bg-gray-50 py-8 sticky top-16 z-40 border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ search: '', selectedCategory: 'all' }">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1 relative">
                <input type="text"
                       x-model="search"
                       placeholder="Rechercher un logiciel..."
                       class="w-full px-4 py-3 pl-12 rounded-lg border-2 border-gray-300 focus:border-emerald-600 focus:ring-2 focus:ring-emerald-600 transition-colors">
                <svg class="w-6 h-6 text-gray-400 absolute left-4 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <div class="flex gap-2 overflow-x-auto pb-2 md:pb-0">
                <button @click="selectedCategory = 'all'"
                        :class="selectedCategory === 'all' ? 'bg-emerald-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'"
                        class="px-4 py-3 rounded-lg font-medium whitespace-nowrap transition-colors border-2 border-gray-200">
                    Toutes
                </button>
                @foreach($categories as $categoryName => $items)
                <button @click="selectedCategory = '{{ $categoryName }}'"
                        :class="selectedCategory === '{{ $categoryName }}' ? 'bg-emerald-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'"
                        class="px-4 py-3 rounded-lg font-medium whitespace-nowrap transition-colors border-2 border-gray-200">
                    {{ $categoryName }}
                </button>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Alternatives par catégorie -->
<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ search: '', selectedCategory: 'all' }">
        @foreach($categories as $categoryName => $alternatives)
        <div x-show="selectedCategory === 'all' || selectedCategory === '{{ $categoryName }}'"
             x-transition
             class="mb-16 last:mb-0">
            <!-- Category Header -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">{{ $categoryName }}</h2>
                <div class="h-1 w-20 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-full"></div>
            </div>

            <!-- Alternatives Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($alternatives as $alt)
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all border-2 border-gray-100 hover:border-emerald-500 overflow-hidden group">
                    <!-- Icon & Title -->
                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 p-6 border-b border-gray-100">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-5xl">{{ $alt['icon'] }}</span>
                            <div class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-xs font-bold">
                                GRATUIT
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $alt['alternative'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $alt['description'] }}</p>
                    </div>

                    <!-- Comparison -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4 pb-4 border-b border-gray-100">
                            <div class="text-center flex-1">
                                <div class="text-xs text-gray-500 mb-1">Au lieu de</div>
                                <div class="font-semibold text-gray-900 text-sm">{{ $alt['proprietary'] }}</div>
                            </div>
                            <div class="px-3">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </div>
                            <div class="text-center flex-1">
                                <div class="text-xs text-emerald-600 font-semibold mb-1">Alternative</div>
                                <div class="font-bold text-emerald-700 text-sm">{{ $alt['alternative'] }}</div>
                            </div>
                        </div>

                        <!-- Features -->
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Open Source</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Multiplateforme</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Support communautaire</span>
                            </div>
                        </div>

                        <!-- CTA -->
                        <a href="#" class="block w-full text-center bg-gradient-to-r from-emerald-600 to-teal-600 text-white py-3 rounded-lg font-semibold hover:from-emerald-700 hover:to-teal-700 transition-all group-hover:scale-105 transform">
                            Télécharger gratuitement
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Pourquoi choisir l'open source -->
<section class="py-20 bg-gradient-to-br from-emerald-600 to-teal-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Pourquoi choisir l'Open Source ?</h2>
            <p class="text-xl text-emerald-100">Des avantages concrets pour votre établissement</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl p-8">
                <div class="text-5xl mb-4">💸</div>
                <h3 class="text-2xl font-bold mb-3">Économies massives</h3>
                <p class="text-emerald-100">
                    Plus de licences à payer. Investissez votre budget dans ce qui compte vraiment : l'éducation.
                </p>
            </div>

            <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl p-8">
                <div class="text-5xl mb-4">🔒</div>
                <h3 class="text-2xl font-bold mb-3">Sécurité garantie</h3>
                <p class="text-emerald-100">
                    Code source ouvert = transparence totale. Protégez vos données et celles de vos élèves.
                </p>
            </div>

            <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl p-8">
                <div class="text-5xl mb-4">🎓</div>
                <h3 class="text-2xl font-bold mb-3">Valeur éducative</h3>
                <p class="text-emerald-100">
                    Enseignez les vraies valeurs du numérique : partage, collaboration et esprit critique.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Guide de migration -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 md:p-12 border-2 border-blue-200">
            <div class="text-center mb-8">
                <div class="text-6xl mb-4">📋</div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Comment migrer en douceur ?</h2>
                <p class="text-gray-600">Suivez notre guide étape par étape</p>
            </div>

            <div class="space-y-4">
                <div class="flex items-start p-4 bg-white rounded-lg shadow-sm">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">1</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Inventaire de vos besoins</h4>
                        <p class="text-gray-600 text-sm">Listez tous les logiciels que vous utilisez actuellement</p>
                    </div>
                </div>

                <div class="flex items-start p-4 bg-white rounded-lg shadow-sm">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">2</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Tests des alternatives</h4>
                        <p class="text-gray-600 text-sm">Installez et testez les alternatives sur quelques postes pilotes</p>
                    </div>
                </div>

                <div class="flex items-start p-4 bg-white rounded-lg shadow-sm">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">3</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Formation des équipes</h4>
                        <p class="text-gray-600 text-sm">Formez vos enseignants et personnels aux nouveaux outils</p>
                    </div>
                </div>

                <div class="flex items-start p-4 bg-white rounded-lg shadow-sm">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">4</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Migration progressive</h4>
                        <p class="text-gray-600 text-sm">Déployez progressivement, service par service, classe par classe</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('linux.migration') }}" class="inline-flex items-center gradient-nird text-white px-8 py-4 rounded-lg font-bold text-lg hover:opacity-90 transition-opacity">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Guide complet de migration Linux
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="py-16 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Des questions sur les alternatives ?</h2>
        <p class="text-xl text-gray-300 mb-8">Notre équipe est là pour vous accompagner</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quiz') }}" class="bg-emerald-600 text-white px-8 py-4 rounded-lg font-bold hover:bg-emerald-700 transition-colors">
                Faire le quiz
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-gray-900 transition-colors">
                Nous contacter
            </a>
        </div>
    </div>
</section>
@endsection
