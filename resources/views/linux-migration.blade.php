@extends('layouts.app')

@section('title', 'Migration vers Linux - Écoles')

@section('content')
<!-- Hero Section avec urgence Windows 10 -->
<section class="relative bg-gradient-to-br from-red-600 via-orange-600 to-yellow-500 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0,0 L100,0 L100,100 L0,100 Z" fill="url(#grid)" />
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
        </svg>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <div class="inline-flex items-center bg-red-900 bg-opacity-50 px-6 py-3 rounded-full mb-6 animate-pulse">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
                <span class="font-bold">ALERTE : Fin du support Windows 10 le 14 octobre 2025</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Migrez votre école<br>vers Linux
            </h1>
            <p class="text-2xl mb-8 text-yellow-100">
                Une solution durable, économique et pédagogique face à l'obsolescence programmée
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('quiz') }}" class="bg-white text-orange-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    Faire le quiz
                </a>
                <a href="{{ route('dashboard.leaders') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-orange-600 transition-colors inline-flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Dashboard Dirigeants
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Countdown Timer -->
<section class="bg-gray-900 text-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-center gap-8" x-data="countdown()">
            <div class="text-center">
                <div class="text-lg font-semibold mb-2">Temps restant avant la fin de Windows 10</div>
            </div>
            <div class="flex gap-4">
                <div class="text-center bg-gray-800 rounded-lg px-4 py-3 min-w-[80px]">
                    <div class="text-3xl font-bold" x-text="days"></div>
                    <div class="text-sm text-gray-400">Jours</div>
                </div>
                <div class="text-center bg-gray-800 rounded-lg px-4 py-3 min-w-[80px]">
                    <div class="text-3xl font-bold" x-text="hours"></div>
                    <div class="text-sm text-gray-400">Heures</div>
                </div>
                <div class="text-center bg-gray-800 rounded-lg px-4 py-3 min-w-[80px]">
                    <div class="text-3xl font-bold" x-text="minutes"></div>
                    <div class="text-sm text-gray-400">Minutes</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi Linux pour les écoles -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Pourquoi Linux pour votre établissement ?</h2>
            <p class="text-xl text-gray-600">Des avantages concrets pour votre école</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Économies -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl hover:shadow-xl transition-all" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="text-6xl mb-4 transition-transform" :class="{ 'scale-110': hover }">💰</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Économies massives</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>0€ de licences logicielles</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Jusqu'à 70% d'économies IT</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Pas de mise à niveau matérielle forcée</span>
                    </li>
                </ul>
            </div>

            <!-- Performance -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl hover:shadow-xl transition-all" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="text-6xl mb-4 transition-transform" :class="{ 'scale-110': hover }">🚀</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Performance optimale</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Redonne vie aux vieux PC</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Démarrage ultra-rapide</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Consommation réduite (-25%)</span>
                    </li>
                </ul>
            </div>

            <!-- Sécurité -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-xl hover:shadow-xl transition-all" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="text-6xl mb-4 transition-transform" :class="{ 'scale-110': hover }">🛡️</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Sécurité renforcée</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-purple-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>99% moins de virus</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-purple-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Mises à jour automatiques</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-purple-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Respect de la vie privée</span>
                    </li>
                </ul>
            </div>

            <!-- Pédagogie -->
            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-xl hover:shadow-xl transition-all" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="text-6xl mb-4 transition-transform" :class="{ 'scale-110': hover }">🎓</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Valeur pédagogique</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-yellow-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Initiation à l'open source</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-yellow-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Apprentissage du code</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-yellow-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Esprit critique numérique</span>
                    </li>
                </ul>
            </div>

            <!-- Environnement -->
            <div class="bg-gradient-to-br from-teal-50 to-teal-100 p-8 rounded-xl hover:shadow-xl transition-all" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="text-6xl mb-4 transition-transform" :class="{ 'scale-110': hover }">🌍</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Écologie</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-teal-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Allonge la durée de vie du matériel</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-teal-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Réduit les déchets électroniques</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-teal-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Consommation énergétique réduite</span>
                    </li>
                </ul>
            </div>

            <!-- Autonomie -->
            <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-xl hover:shadow-xl transition-all" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <div class="text-6xl mb-4 transition-transform" :class="{ 'scale-110': hover }">🗽</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Souveraineté</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Indépendance technologique</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Contrôle total des données</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Pas de dépendance aux GAFAM</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Distributions Linux recommandées -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Quelle distribution choisir ?</h2>
            <p class="text-xl text-gray-600">Solutions adaptées aux établissements scolaires</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($distributions as $distro)
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all border-2 border-transparent hover:border-blue-500">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">{{ $distro['name'] }}</h3>
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 text-sm font-semibold rounded-full mt-2">
                            {{ $distro['level'] }}
                        </span>
                    </div>
                    <div class="text-5xl">🐧</div>
                </div>
                <p class="text-gray-600 mb-6">{{ $distro['description'] }}</p>
                <div class="space-y-2">
                    <h4 class="font-semibold text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Avantages éducatifs
                    </h4>
                    <ul class="space-y-1 ml-7">
                        @foreach($distro['education_features'] as $feature)
                        <li class="text-gray-700">• {{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-nird">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h2 class="text-4xl font-bold mb-6">Prêt à franchir le pas ?</h2>
        <p class="text-xl mb-8 text-blue-100">
            Rejoignez les centaines d'écoles qui ont déjà fait le choix de Linux
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quiz') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors">
                Démarrer le quiz
            </a>
            <a href="{{ route('alternatives') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-blue-600 transition-colors">
                Voir les alternatives logicielles
            </a>
        </div>
    </div>
</section>

<script>
function countdown() {
    return {
        days: 0,
        hours: 0,
        minutes: 0,
        seconds: 0,
        init() {
            this.updateCountdown();
            setInterval(() => this.updateCountdown(), 60000); // Update every minute
        },
        updateCountdown() {
            const endDate = new Date('2025-10-14T00:00:00');
            const now = new Date();
            const diff = endDate - now;

            this.days = Math.floor(diff / (1000 * 60 * 60 * 24));
            this.hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            this.minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            this.seconds = Math.floor((diff % (1000 * 60)) / 1000);
        }
    }
}
</script>
@endsection
