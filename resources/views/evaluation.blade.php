@extends('layouts.app')

@section('title', 'Auto-évaluation NIRD')

@section('content')
<div class="py-12" style="background: linear-gradient(to bottom, rgba(5, 150, 105, 0.05), white);">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Auto-évaluation NIRD</h1>
            <p class="text-xl text-gray-600">Évaluez votre maturité numérique en quelques minutes</p>
        </div>

        <!-- Evaluation Tool -->
        <div x-data="evaluationTool()" class="bg-white rounded-xl shadow-lg p-8">
            <!-- Progress Bar -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm font-medium text-gray-700">Progression</span>
                    <span class="text-sm font-medium text-gray-700" x-text="Math.round(progress) + '%'"></span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="gradient-nird h-2 rounded-full transition-all duration-300" :style="'width: ' + progress + '%'"></div>
                </div>
            </div>

            <!-- Questions Section -->
            <div x-show="!showResults">
                <!-- Question Categories -->
                <div class="space-y-8">
                    <!-- Numérique Inclusif -->
                    <div class="border-b border-gray-200 pb-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-nird-green-light rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-nird-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Numérique Inclusif</h3>
                                <p class="text-sm text-gray-600">Accessibilité et inclusion</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">
                                    Vos services numériques respectent-ils les normes d'accessibilité (WCAG 2.1) ?
                                </label>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="i in 5" :key="i">
                                        <button @click="scores.inclusif = i"
                                                :class="scores.inclusif >= i ? 'bg-nird-green text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                                                class="px-4 py-2 rounded-lg font-medium transition-colors">
                                            <span x-text="i"></span>
                                        </button>
                                    </template>
                                </div>
                                <div class="flex justify-between mt-2 text-xs text-gray-500">
                                    <span>Pas du tout</span>
                                    <span>Totalement</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Transformation Numérique -->
                    <div class="border-b border-gray-200 pb-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Transformation Numérique</h3>
                                <p class="text-sm text-gray-600">Innovation et digitalisation</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">
                                    Votre organisation dispose-t-elle d'une stratégie numérique claire ?
                                </label>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="i in 5" :key="i">
                                        <button @click="scores.numerique = i"
                                                :class="scores.numerique >= i ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                                                class="px-4 py-2 rounded-lg font-medium transition-colors">
                                            <span x-text="i"></span>
                                        </button>
                                    </template>
                                </div>
                                <div class="flex justify-between mt-2 text-xs text-gray-500">
                                    <span>Pas du tout</span>
                                    <span>Totalement</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Responsabilité -->
                    <div class="border-b border-gray-200 pb-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-nird-green-light rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-nird-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Numérique Responsable</h3>
                                <p class="text-sm text-gray-600">Éthique et protection des données</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">
                                    Respectez-vous les principes de protection des données (RGPD) ?
                                </label>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="i in 5" :key="i">
                                        <button @click="scores.responsable = i"
                                                :class="scores.responsable >= i ? 'bg-nird-green text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                                                class="px-4 py-2 rounded-lg font-medium transition-colors">
                                            <span x-text="i"></span>
                                        </button>
                                    </template>
                                </div>
                                <div class="flex justify-between mt-2 text-xs text-gray-500">
                                    <span>Pas du tout</span>
                                    <span>Totalement</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Durabilité -->
                    <div class="pb-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Numérique Durable</h3>
                                <p class="text-sm text-gray-600">Impact environnemental</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">
                                    Mesurez-vous et optimisez-vous l'empreinte carbone de vos services numériques ?
                                </label>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="i in 5" :key="i">
                                        <button @click="scores.durable = i"
                                                :class="scores.durable >= i ? 'bg-teal-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                                                class="px-4 py-2 rounded-lg font-medium transition-colors">
                                            <span x-text="i"></span>
                                        </button>
                                    </template>
                                </div>
                                <div class="flex justify-between mt-2 text-xs text-gray-500">
                                    <span>Pas du tout</span>
                                    <span>Totalement</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-8 text-center">
                    <button @click="calculateResults()"
                            :disabled="!canSubmit"
                            :class="canSubmit ? 'gradient-nird hover:opacity-90' : 'bg-gray-300 cursor-not-allowed'"
                            class="px-8 py-3 text-white rounded-lg font-semibold transition-opacity">
                        Voir mes résultats
                    </button>
                </div>
            </div>

            <!-- Results Section -->
            <div x-show="showResults" x-transition>
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Vos résultats</h2>
                    <p class="text-gray-600">Niveau de maturité : <span class="font-bold text-blue-600" x-text="results.level"></span></p>
                </div>

                <!-- Scores Chart -->
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-medium text-gray-700">Numérique Inclusif</span>
                                <span class="text-sm font-bold text-nird-green" x-text="scores.inclusif + '/5'"></span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-nird-green h-3 rounded-full transition-all duration-500" :style="'width: ' + (scores.inclusif * 20) + '%'"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-medium text-gray-700">Transformation Numérique</span>
                                <span class="text-sm font-bold text-blue-600" x-text="scores.numerique + '/5'"></span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-blue-600 h-3 rounded-full transition-all duration-500" :style="'width: ' + (scores.numerique * 20) + '%'"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-medium text-gray-700">Numérique Responsable</span>
                                <span class="text-sm font-bold text-nird-green" x-text="scores.responsable + '/5'"></span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-nird-green h-3 rounded-full transition-all duration-500" :style="'width: ' + (scores.responsable * 20) + '%'"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-medium text-gray-700">Numérique Durable</span>
                                <span class="text-sm font-bold text-teal-600" x-text="scores.durable + '/5'"></span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-teal-600 h-3 rounded-full transition-all duration-500" :style="'width: ' + (scores.durable * 20) + '%'"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recommendations -->
                <div x-show="results.recommendations && results.recommendations.length > 0" class="bg-blue-50 border border-blue-200 rounded-lg p-6 mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Recommandations</h3>
                    <ul class="space-y-2">
                        <template x-for="rec in results.recommendations" :key="rec">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-gray-700" x-text="rec"></span>
                            </li>
                        </template>
                    </ul>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <button @click="reset()" class="flex-1 border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                        Refaire l'évaluation
                    </button>
                    <a href="{{ route('resources') }}" class="flex-1 text-center gradient-nird text-white px-6 py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                        Explorer les ressources
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function evaluationTool() {
    return {
        scores: {
            inclusif: 0,
            numerique: 0,
            responsable: 0,
            durable: 0
        },
        showResults: false,
        results: {
            level: '',
            recommendations: []
        },
        get progress() {
            const answered = Object.values(this.scores).filter(s => s > 0).length;
            return (answered / 4) * 100;
        },
        get canSubmit() {
            return Object.values(this.scores).every(s => s > 0);
        },
        calculateResults() {
            const total = Object.values(this.scores).reduce((a, b) => a + b, 0);
            const average = total / 4;

            // Determine level
            if (average >= 4) {
                this.results.level = 'Expert';
            } else if (average >= 3) {
                this.results.level = 'Avancé';
            } else if (average >= 2) {
                this.results.level = 'Intermédiaire';
            } else {
                this.results.level = 'Débutant';
            }

            // Generate recommendations
            this.results.recommendations = [];
            if (this.scores.inclusif < 3) {
                this.results.recommendations.push("Améliorez l'accessibilité de vos services numériques avec WCAG 2.1");
            }
            if (this.scores.numerique < 3) {
                this.results.recommendations.push("Développez une stratégie numérique claire et alignée avec vos objectifs");
            }
            if (this.scores.responsable < 3) {
                this.results.recommendations.push("Adoptez des pratiques de développement éco-responsable et éthique");
            }
            if (this.scores.durable < 3) {
                this.results.recommendations.push("Optimisez la durée de vie de vos équipements et mesurez votre impact carbone");
            }

            this.showResults = true;
        },
        reset() {
            this.scores = {
                inclusif: 0,
                numerique: 0,
                responsable: 0,
                durable: 0
            };
            this.showResults = false;
            this.results = {
                level: '',
                recommendations: []
            };
        }
    }
}
</script>
@endsection
