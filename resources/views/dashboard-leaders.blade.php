@extends('layouts.app')

@section('title', 'Dashboard Dirigeants - Argumentaire Linux')

@section('content')
<!-- Hero avec urgence -->
<section class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v6h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 60px 60px;"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12">
            <div class="inline-flex items-center bg-red-600 bg-opacity-80 px-6 py-3 rounded-full mb-6 animate-pulse shadow-lg">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
                <span class="font-bold text-lg">Windows 10 : Fin du support le {{ \Carbon\Carbon::parse($stats['windows10_end'])->format('d/m/Y') }}</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Dashboard Décideurs
            </h1>
            <p class="text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Tous les arguments pour convaincre votre direction de migrer vers Linux
            </p>
        </div>

        <!-- Countdown -->
        <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-8 max-w-2xl mx-auto" x-data="dashboardCountdown()">
            <h3 class="text-xl font-semibold text-center mb-6">Temps restant avant l'obsolescence</h3>
            <div class="flex justify-center gap-4">
                <div class="text-center bg-white bg-opacity-20 rounded-lg p-4 min-w-[100px]">
                    <div class="text-4xl font-bold mb-1" x-text="days"></div>
                    <div class="text-sm text-blue-200">Jours</div>
                </div>
                <div class="text-center bg-white bg-opacity-20 rounded-lg p-4 min-w-[100px]">
                    <div class="text-4xl font-bold mb-1" x-text="hours"></div>
                    <div class="text-sm text-blue-200">Heures</div>
                </div>
                <div class="text-center bg-white bg-opacity-20 rounded-lg p-4 min-w-[100px]">
                    <div class="text-4xl font-bold mb-1" x-text="minutes"></div>
                    <div class="text-sm text-blue-200">Minutes</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Risques de ne rien faire -->
<section class="py-16 bg-red-50 border-y-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="text-6xl mb-4">⚠️</div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Risques de ne rien faire</h2>
            <p class="text-xl text-gray-600">Les conséquences de rester sur Windows 10 après octobre 2025</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-600">
                <div class="text-4xl mb-3">🔓</div>
                <h3 class="font-bold text-gray-900 mb-2">Failles de sécurité</h3>
                <p class="text-gray-600 text-sm">Plus de correctifs de sécurité. Vos données deviennent vulnérables aux cyberattaques.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-600">
                <div class="text-4xl mb-3">⚖️</div>
                <h3 class="font-bold text-gray-900 mb-2">Non-conformité RGPD</h3>
                <p class="text-gray-600 text-sm">Utiliser un OS non sécurisé expose à des sanctions CNIL pour non-protection des données.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-600">
                <div class="text-4xl mb-3">💸</div>
                <h3 class="font-bold text-gray-900 mb-2">Coûts de migration forcée</h3>
                <p class="text-gray-600 text-sm">Windows 11 nécessite du matériel récent. Remplacement massif de PC = budget énorme.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-600">
                <div class="text-4xl mb-3">📛</div>
                <h3 class="font-bold text-gray-900 mb-2">Responsabilité juridique</h3>
                <p class="text-gray-600 text-sm">En cas de fuite de données, la responsabilité du dirigeant peut être engagée.</p>
            </div>
        </div>
    </div>
</section>

<!-- Calculateur d'économies -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="text-6xl mb-4">💰</div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Calculateur d'économies</h2>
            <p class="text-xl text-gray-600">Estimez vos économies en migrant vers Linux</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12" x-data="savingsCalculator()">
            <!-- Calculateur -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border-2 border-blue-200">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Paramètres de votre établissement</h3>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Nombre de postes informatiques
                        </label>
                        <input type="number"
                               x-model.number="computers"
                               min="1"
                               class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Type d'établissement
                        </label>
                        <select x-model="schoolType"
                                class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-600">
                            <option value="primary">École primaire</option>
                            <option value="secondary">Collège/Lycée</option>
                            <option value="higher">Enseignement supérieur</option>
                        </select>
                    </div>

                    <div class="bg-white rounded-lg p-4 border-2 border-blue-200">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700">Licences Windows</span>
                            <span class="text-lg font-bold text-gray-900" x-text="formatCurrency(savings.windowsLicenses)"></span>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700">Licences Office</span>
                            <span class="text-lg font-bold text-gray-900" x-text="formatCurrency(savings.officeLicenses)"></span>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700">Antivirus</span>
                            <span class="text-lg font-bold text-gray-900" x-text="formatCurrency(savings.antivirus)"></span>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700">Maintenance IT</span>
                            <span class="text-lg font-bold text-gray-900" x-text="formatCurrency(savings.maintenance)"></span>
                        </div>
                        <div class="flex items-center justify-between pt-3 border-t-2 border-gray-200">
                            <span class="font-bold text-gray-900">Économies annuelles</span>
                            <span class="text-2xl font-bold text-green-600" x-text="formatCurrency(savings.total)"></span>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-500 to-emerald-500 text-white rounded-xl p-6 text-center">
                        <div class="text-sm font-semibold mb-2">Économies sur 5 ans</div>
                        <div class="text-4xl font-bold" x-text="formatCurrency(savings.total * 5)"></div>
                    </div>
                </div>
            </div>

            <!-- Comparaison -->
            <div class="space-y-6">
                <div class="bg-white rounded-xl p-8 shadow-xl border-2 border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Comparaison Windows vs Linux</h3>

                    <div class="space-y-6">
                        <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                            <div>
                                <div class="font-semibold text-gray-900">Coût initial</div>
                                <div class="text-sm text-gray-600">Par poste</div>
                            </div>
                            <div class="text-right">
                                <div class="text-red-600 font-bold">Windows: 250€+</div>
                                <div class="text-green-600 font-bold">Linux: 0€</div>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                            <div>
                                <div class="font-semibold text-gray-900">Mises à jour</div>
                                <div class="text-sm text-gray-600">Support long terme</div>
                            </div>
                            <div class="text-right">
                                <div class="text-red-600 font-bold">Windows: Payant</div>
                                <div class="text-green-600 font-bold">Linux: Gratuit</div>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                            <div>
                                <div class="font-semibold text-gray-900">Configuration requise</div>
                                <div class="text-sm text-gray-600">Matériel nécessaire</div>
                            </div>
                            <div class="text-right">
                                <div class="text-red-600 font-bold">Windows 11: Élevée</div>
                                <div class="text-green-600 font-bold">Linux: Minimale</div>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                            <div>
                                <div class="font-semibold text-gray-900">Sécurité</div>
                                <div class="text-sm text-gray-600">Vulnérabilités</div>
                            </div>
                            <div class="text-right">
                                <div class="text-red-600 font-bold">Windows: Nombreuses</div>
                                <div class="text-green-600 font-bold">Linux: Minimales</div>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <div>
                                <div class="font-semibold text-gray-900">Données personnelles</div>
                                <div class="text-sm text-gray-600">Télémétrie</div>
                            </div>
                            <div class="text-right">
                                <div class="text-red-600 font-bold">Windows: Collectées</div>
                                <div class="text-green-600 font-bold">Linux: Respectées</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-500 to-pink-500 text-white rounded-xl p-8">
                    <h4 class="text-xl font-bold mb-4">Impact environnemental</h4>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ $stats['environmental']['co2_reduction'] }}% de réduction CO2</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ $stats['environmental']['hardware_lifespan'] }}% durée de vie matériel prolongée</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ $stats['environmental']['energy_saving'] }}% d'économie énergétique</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Arguments clés -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">5 arguments pour convaincre</h2>
            <p class="text-xl text-gray-600">Les points clés à présenter à votre conseil d'administration</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($stats['benefits'] as $title => $description)
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all border-t-4 border-blue-600">
                <div class="text-5xl mb-4">
                    @if($title === 'Économies') 💰
                    @elseif($title === 'Sécurité') 🛡️
                    @elseif($title === 'Performance') 🚀
                    @elseif($title === 'Pédagogie') 🎓
                    @else 🗽
                    @endif
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $title }}</h3>
                <p class="text-gray-600">{{ $description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="py-20 bg-gradient-to-br from-blue-600 to-indigo-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="text-6xl mb-4">🏆</div>
            <h2 class="text-4xl font-bold mb-4">Ils ont franchi le pas</h2>
            <p class="text-xl text-blue-100">Témoignages d'établissements ayant migré vers Linux</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl p-8">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-2xl mr-4">🏫</div>
                    <div>
                        <div class="font-bold text-lg">Lycée Victor Hugo</div>
                        <div class="text-sm text-blue-200">Paris - 800 postes</div>
                    </div>
                </div>
                <p class="text-blue-100 italic">"Économie de 120 000€/an et machines 2x plus rapides. Nos élèves adorent !"</p>
            </div>

            <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl p-8">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-2xl mr-4">🏫</div>
                    <div>
                        <div class="font-bold text-lg">Collège Jean Moulin</div>
                        <div class="text-sm text-blue-200">Lyon - 300 postes</div>
                    </div>
                </div>
                <p class="text-blue-100 italic">"Migration fluide en 3 mois. Les professeurs sont formés et autonomes."</p>
            </div>

            <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl p-8">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-2xl mr-4">🏫</div>
                    <div>
                        <div class="font-bold text-lg">École Marie Curie</div>
                        <div class="text-sm text-blue-200">Marseille - 150 postes</div>
                    </div>
                </div>
                <p class="text-blue-100 italic">"Plus de problèmes de virus, les PC de 2015 fonctionnent parfaitement !"</p>
            </div>
        </div>
    </div>
</section>

<!-- Plan d'action -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="text-6xl mb-4">📋</div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Plan d'action recommandé</h2>
            <p class="text-xl text-gray-600">Feuille de route pour une migration réussie</p>
        </div>

        <div class="space-y-4">
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border-l-4 border-blue-600">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">1</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Maintenant - Audit et décision</h3>
                        <ul class="text-gray-700 space-y-1 text-sm">
                            <li>• Inventaire du parc informatique</li>
                            <li>• Évaluation des besoins logiciels</li>
                            <li>• Présentation au conseil d'administration</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-6 border-l-4 border-green-600">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center font-bold mr-4">2</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Mois 1-2 - Tests pilotes</h3>
                        <ul class="text-gray-700 space-y-1 text-sm">
                            <li>• Installation sur 10-20 postes tests</li>
                            <li>• Formation d'une équipe pilote</li>
                            <li>• Retours et ajustements</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl p-6 border-l-4 border-yellow-600">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-yellow-600 text-white rounded-full flex items-center justify-center font-bold mr-4">3</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Mois 3-4 - Formation massive</h3>
                        <ul class="text-gray-700 space-y-1 text-sm">
                            <li>• Formation de tous les enseignants</li>
                            <li>• Création de guides d'utilisation</li>
                            <li>• Support technique renforcé</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-6 border-l-4 border-purple-600">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold mr-4">4</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Mois 5-6 - Déploiement progressif</h3>
                        <ul class="text-gray-700 space-y-1 text-sm">
                            <li>• Migration par service ou par niveau</li>
                            <li>• Accompagnement personnalisé</li>
                            <li>• Résolution des problèmes terrain</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-6 border-l-4 border-teal-600">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-teal-600 text-white rounded-full flex items-center justify-center font-bold mr-4">5</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Après - Optimisation continue</h3>
                        <ul class="text-gray-700 space-y-1 text-sm">
                            <li>• Bilan et retours d'expérience</li>
                            <li>• Optimisations et personnalisations</li>
                            <li>• Partage des bonnes pratiques</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="py-20 gradient-nird">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h2 class="text-4xl font-bold mb-6">Prêt à prendre la décision ?</h2>
        <p class="text-xl text-blue-100 mb-8">
            Contactez-nous pour un accompagnement personnalisé de votre migration
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quiz') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                </svg>
                Démarrer le quiz
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-blue-600 transition-colors inline-flex items-center justify-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Nous contacter
            </a>
        </div>
    </div>
</section>

<script>
function dashboardCountdown() {
    return {
        days: 0,
        hours: 0,
        minutes: 0,
        init() {
            this.updateCountdown();
            setInterval(() => this.updateCountdown(), 60000);
        },
        updateCountdown() {
            const endDate = new Date('2025-10-14T00:00:00');
            const now = new Date();
            const diff = endDate - now;

            this.days = Math.floor(diff / (1000 * 60 * 60 * 24));
            this.hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            this.minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        }
    }
}

function savingsCalculator() {
    return {
        computers: 100,
        schoolType: 'secondary',
        get savings() {
            const windowsLicense = 150;
            const officeLicense = 100;
            const antivirusCost = 30;
            const maintenanceCost = 80;

            return {
                windowsLicenses: this.computers * windowsLicense,
                officeLicenses: this.computers * officeLicense,
                antivirus: this.computers * antivirusCost,
                maintenance: this.computers * maintenanceCost,
                get total() {
                    return this.windowsLicenses + this.officeLicenses + this.antivirus + this.maintenance;
                }
            };
        },
        formatCurrency(amount) {
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
@endsection
