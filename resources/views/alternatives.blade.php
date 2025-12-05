@extends('layouts.app')

@section('title', 'Alternatives Open Source')

@section('content')
<!-- Hero Section -->
<section class="gradient-nird-blue-violet text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Alternatives Open Source</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Logiciels libres et systèmes d'exploitation pour votre établissement</p>
        </div>
    </div>
</section>



<!-- Alternatives par catégorie -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach($categories as $categoryName => $alternatives)
        <div class="mb-16 last:mb-0">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">{{ $categoryName }}</h2>

            <div class="space-y-6">
                @foreach($alternatives as $alt)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-stretch">
                    <!-- Solution payante (gauche) -->
                    <div class="bg-red-50 border-2 border-red-200 rounded-lg p-6 flex flex-col">
                        <div class="flex items-start space-x-4 flex-1">
                            <span class="text-3xl">{{ $alt['icon'] }}</span>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <h3 class="text-lg font-bold text-gray-900">{{ $alt['proprietary'] }}</h3>
                                    <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs font-semibold">
                                        Payant
                                    </span>
                                </div>
                                @if(isset($alt['price']))
                                <div class="mt-3 bg-white rounded px-3 py-2 border border-red-200">
                                    <p class="text-xs text-gray-600 mb-1">Prix de la licence :</p>
                                    <p class="text-sm font-bold text-red-600">{{ $alt['price'] }}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Alternative open source (droite) -->
                    <div class="bg-nird-green-light border-2 border-nird-green rounded-lg p-6 flex flex-col">
                        <div class="flex items-start space-x-4 flex-1">
                            <span class="text-3xl">{{ $alt['icon'] }}</span>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <h3 class="text-lg font-bold text-gray-900">{{ $alt['alternative'] }}</h3>
                                    <span class="badge-eco px-2 py-1 rounded text-xs font-semibold">
                                        Gratuit
                                    </span>
                                </div>
                                <p class="text-sm text-gray-700 mt-2">{{ $alt['description'] }}</p>
                                <p class="text-xs text-nird-green font-semibold mt-3">✓ Open Source • ✓ Sans frais de licence</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Avantages -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Avantages des logiciels libres</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg p-6 text-center">
                <div class="text-4xl mb-3">💰</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Économies</h3>
                <p class="text-sm text-gray-600">
                    Pas de frais de licence, réduction des coûts IT
                </p>
            </div>

            <div class="bg-white rounded-lg p-6 text-center">
                <div class="text-4xl mb-3">🔒</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Sécurité</h3>
                <p class="text-sm text-gray-600">
                    Code source auditable, mises à jour régulières
                </p>
            </div>

            <div class="bg-white rounded-lg p-6 text-center">
                <div class="text-4xl mb-3">🌍</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Souveraineté</h3>
                <p class="text-sm text-gray-600">
                    Indépendance technologique et maîtrise des données
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
