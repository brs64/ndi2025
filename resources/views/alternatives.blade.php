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
<section class="py-16 bg-white" x-data="costCalculator()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Panneau de calcul sticky -->
        <div class="mb-8 sticky top-20 z-10">
            <div class="bg-gradient-to-r from-red-50 to-red-100 border-2 border-red-300 rounded-lg p-6 shadow-lg">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div>
                            <label class="text-sm font-semibold text-gray-700 mb-1 block">Nombre d'utilisateurs/postes</label>
                            <input
                                type="number"
                                x-model.number="users"
                                min="1"
                                value="10"
                                class="px-4 py-2 border-2 border-red-300 rounded-lg w-32 font-bold text-center focus:outline-none focus:ring-2 focus:ring-red-500"
                            >
                        </div>
                        <div class="text-sm text-gray-600">
                            <span x-text="Object.keys(selected).length"></span> solution(s) sélectionnée(s)
                        </div>
                    </div>
                    <div class="text-center md:text-right">
                        <div class="text-sm font-semibold text-gray-700 mb-1">Coût total annuel estimé</div>
                        <div class="text-3xl font-bold text-red-600" x-text="formatPrice(calculateTotal())"></div>
                        <div class="text-xs text-gray-500 mt-1">Avec les solutions propriétaires sélectionnées</div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($categories as $categoryName => $alternatives)
        <div class="mb-16 last:mb-0">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">{{ $categoryName }}</h2>

            <div class="space-y-6">
                @foreach($alternatives as $index => $alt)
                @php
                    // Nettoyage de l'ID pour éviter les problèmes avec les caractères spéciaux
                    $cleanCategory = preg_replace('/[^a-zA-Z0-9]/', '_', $categoryName);
                    $itemId = $cleanCategory . '_' . $index;
                @endphp
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-stretch">
                    <!-- Solution payante (gauche) - cliquable -->
                    <div
                        @click="toggleSelection('{{ $itemId }}', {{ json_encode($alt['proprietary']) }}, {{ json_encode($alt['price'] ?? '') }})"
                        class="cursor-pointer transition-all duration-200 rounded-lg p-6 flex flex-col"
                        :class="selected['{{ $itemId }}'] ? 'bg-red-200 border-4 border-red-500 shadow-lg scale-105' : 'bg-red-50 border-2 border-red-200 hover:border-red-300 hover:shadow-md'"
                    >
                        <div class="flex items-start justify-between mb-2">
                            <div class="flex items-start space-x-4 flex-1">
                                @if(str_contains($alt['proprietary'], 'Windows'))
                                    <svg class="w-12 h-12 flex-shrink-0" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 12.402L35.687 7.586v34.423H0V12.402zm35.687 33.529v34.424L0 75.549V45.931h35.687zM40.11 7.001l47.787-6.999v41.016H40.11V7.001zm47.787 40.432v41.016l-47.787-6.999V47.433h47.787z" fill="#00ADEF"/>
                                    </svg>
                                @else
                                    <span class="text-3xl">{{ $alt['icon'] }}</span>
                                @endif
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
                            <!-- Checkbox indicator -->
                            <div class="flex-shrink-0">
                                <div
                                    class="w-6 h-6 rounded border-2 flex items-center justify-center transition-colors"
                                    :class="selected['{{ $itemId }}'] ? 'bg-red-600 border-red-600' : 'bg-white border-red-300'"
                                >
                                    <svg x-show="selected['{{ $itemId }}']" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
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

        <!-- Comparaison finale -->
        <div class="mt-12 bg-gradient-to-r from-nird-green to-nird-green-dark text-white rounded-lg p-8 text-center" x-show="Object.keys(selected).length > 0">
            <h3 class="text-2xl font-bold mb-4">💰 Économies potentielles avec l'Open Source</h3>
            <div class="text-5xl font-bold mb-2" x-text="formatPrice(calculateTotal())"></div>
            <p class="text-xl">économisés par an en passant aux alternatives libres et gratuites</p>
            <p class="text-sm mt-4 opacity-90">Pour <span x-text="users"></span> utilisateurs/postes</p>
        </div>
    </div>

    <script>
        function costCalculator() {
            return {
                selected: {},
                users: 10,

                toggleSelection(id, name, price) {
                    if (this.selected[id]) {
                        delete this.selected[id];
                    } else {
                        this.selected[id] = { name, price };
                    }
                },

                parsePrice(priceStr) {
                    if (!priceStr || priceStr === 'Gratuit (Google Workspace Education)' || priceStr.includes('Inclus')) {
                        return 0;
                    }

                    // Extraire le nombre
                    const match = priceStr.match(/(\d+(?:,\d+)?)/);
                    if (!match) return 0;

                    const amount = parseFloat(match[1].replace(',', '.'));

                    // Convertir en coût annuel
                    if (priceStr.includes('/mois')) {
                        return amount * 12;
                    } else if (priceStr.includes('/an')) {
                        return amount;
                    } else if (priceStr.includes('/licence') || priceStr.includes('/poste')) {
                        // Coût unique, on le considère comme annuel pour la première année
                        return amount;
                    }

                    return amount;
                },

                calculateTotal() {
                    let total = 0;
                    for (const key in this.selected) {
                        const item = this.selected[key];
                        const annualPrice = this.parsePrice(item.price);
                        total += annualPrice * this.users;
                    }
                    return total;
                },

                formatPrice(amount) {
                    return new Intl.NumberFormat('fr-FR', {
                        style: 'currency',
                        currency: 'EUR',
                        minimumFractionDigits: 0,
                        maximumFractionDigits: 0
                    }).format(amount);
                }
            }
        }
    </script>
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
