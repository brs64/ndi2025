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
        <div class="mb-12 last:mb-0">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ $categoryName }}</h2>

            <div class="space-y-4">
                @foreach($alternatives as $alt)
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex items-start space-x-4 flex-1">
                            <span class="text-3xl">{{ $alt['icon'] }}</span>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $alt['alternative'] }}</h3>
                                <p class="text-sm text-gray-600 mb-2">{{ $alt['description'] }}</p>
                                <p class="text-xs text-gray-500">Alternative à : <span class="font-semibold">{{ $alt['proprietary'] }}</span></p>
                            </div>
                        </div>
                        <div class="flex flex-col items-end gap-8 flex-shrink-0">
                            <span class="badge-eco px-3 py-1 rounded text-xs font-semibold whitespace-nowrap">
                                Gratuit
                            </span>
                            @if(isset($alt['price']))
                            <div class="text-right flex gap-1">
                                <div class="text-xs text-gray-500 mb-0.5" >Prix licence payante :</div>
                                <div class="text-xs font-semibold text-red-500">{{ $alt['price'] }}</div>
                            </div>
                            @endif
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
