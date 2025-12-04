@extends('layouts.app')

@section('title', 'Quiz d\'orientation NIRD')

@section('content')
<div class="bg-gradient-to-b from-indigo-50 via-purple-50 to-white min-h-screen py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center bg-indigo-100 px-6 py-3 rounded-full mb-4">
                <svg class="w-6 h-6 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                </svg>
                <span class="font-semibold text-indigo-800">Quiz personnalisé</span>
            </div>
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Trouvez votre solution idéale</h1>
            <p class="text-xl text-gray-600">Répondez à quelques questions pour obtenir des recommandations personnalisées</p>
        </div>

        <!-- Quiz Application -->
        <div x-data="quizApp()" class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <!-- Progress Bar -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 p-6">
                <div class="flex justify-between items-center mb-3">
                    <span class="text-white font-semibold">Question <span x-text="currentQuestion + 1"></span> sur <span x-text="questions.length"></span></span>
                    <span class="text-white font-semibold" x-text="Math.round(progress) + '%'"></span>
                </div>
                <div class="w-full bg-white bg-opacity-30 rounded-full h-3">
                    <div class="bg-white h-3 rounded-full transition-all duration-500" :style="'width: ' + progress + '%'"></div>
                </div>
            </div>

            <!-- Quiz Content -->
            <div class="p-8">
                <!-- Questions -->
                <div x-show="!showResults">
                    <template x-for="(question, qIndex) in questions" :key="qIndex">
                        <div x-show="currentQuestion === qIndex" x-transition class="space-y-6">
                            <!-- Question Icon & Title -->
                            <div class="text-center mb-8">
                                <div class="text-7xl mb-4" x-text="question.icon"></div>
                                <h2 class="text-3xl font-bold text-gray-900 mb-3" x-text="question.question"></h2>
                                <p class="text-gray-600" x-text="question.description"></p>
                            </div>

                            <!-- Answers -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <template x-for="(answer, aIndex) in question.answers" :key="aIndex">
                                    <button @click="selectAnswer(qIndex, aIndex)"
                                            :class="selectedAnswers[qIndex] === aIndex ? 'border-indigo-600 bg-indigo-50 ring-2 ring-indigo-600' : 'border-gray-300 hover:border-indigo-400 hover:bg-gray-50'"
                                            class="relative p-6 border-2 rounded-xl text-left transition-all group">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 mr-4">
                                                <div class="w-12 h-12 rounded-full flex items-center justify-center text-2xl"
                                                     :class="selectedAnswers[qIndex] === aIndex ? 'bg-indigo-600 text-white' : 'bg-gray-100 group-hover:bg-indigo-100'">
                                                    <span x-text="answer.icon"></span>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div class="font-semibold text-gray-900 mb-1" x-text="answer.text"></div>
                                                <div class="text-sm text-gray-600" x-text="answer.detail"></div>
                                            </div>
                                            <div x-show="selectedAnswers[qIndex] === aIndex" class="absolute top-4 right-4">
                                                <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </template>
                            </div>

                            <!-- Navigation -->
                            <div class="flex justify-between items-center pt-6 mt-8 border-t border-gray-200">
                                <button @click="previousQuestion()"
                                        x-show="currentQuestion > 0"
                                        class="flex items-center px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition-colors">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    Précédent
                                </button>
                                <div x-show="currentQuestion === 0"></div>

                                <button @click="nextQuestion()"
                                        x-show="currentQuestion < questions.length - 1"
                                        :disabled="selectedAnswers[currentQuestion] === undefined"
                                        :class="selectedAnswers[currentQuestion] !== undefined ? 'gradient-nird text-white hover:opacity-90' : 'bg-gray-300 text-gray-500 cursor-not-allowed'"
                                        class="flex items-center px-6 py-3 rounded-lg font-semibold transition-all">
                                    Suivant
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>

                                <button @click="calculateResults()"
                                        x-show="currentQuestion === questions.length - 1"
                                        :disabled="selectedAnswers[currentQuestion] === undefined"
                                        :class="selectedAnswers[currentQuestion] !== undefined ? 'gradient-nird text-white hover:opacity-90' : 'bg-gray-300 text-gray-500 cursor-not-allowed'"
                                        class="flex items-center px-8 py-3 rounded-lg font-bold text-lg transition-all">
                                    Voir mes résultats
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Results -->
                <div x-show="showResults" x-transition class="space-y-8">
                    <div class="text-center mb-8">
                        <div class="text-7xl mb-4">🎉</div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-3">Vos recommandations personnalisées</h2>
                        <p class="text-xl text-gray-600">Basées sur vos réponses, voici notre analyse</p>
                    </div>

                    <!-- Profil -->
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-8 border-2 border-indigo-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <svg class="w-8 h-8 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Votre profil : <span class="text-indigo-600 ml-2" x-text="results.profile"></span>
                        </h3>
                        <p class="text-gray-700 text-lg" x-text="results.profileDescription"></p>
                    </div>

                    <!-- Distribution recommandée -->
                    <div class="bg-white rounded-xl p-8 border-2 border-green-200 shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="text-4xl mr-3">🐧</span>
                            Distribution Linux recommandée
                        </h3>
                        <div class="bg-gradient-to-r from-green-50 to-teal-50 rounded-lg p-6 mb-4">
                            <div class="text-3xl font-bold text-green-700 mb-2" x-text="results.distribution"></div>
                            <p class="text-gray-700" x-text="results.distributionReason"></p>
                        </div>
                    </div>

                    <!-- Recommandations -->
                    <div class="bg-white rounded-xl p-8 border-2 border-blue-200 shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg class="w-8 h-8 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Prochaines étapes recommandées
                        </h3>
                        <div class="space-y-4">
                            <template x-for="(recommendation, index) in results.recommendations" :key="index">
                                <div class="flex items-start p-4 bg-blue-50 rounded-lg">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm" x-text="index + 1"></div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="font-semibold text-gray-900 mb-1" x-text="recommendation.title"></h4>
                                        <p class="text-gray-700 text-sm mb-2" x-text="recommendation.description"></p>
                                        <a :href="recommendation.link" class="text-blue-600 hover:text-blue-700 font-medium text-sm inline-flex items-center">
                                            En savoir plus
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <button @click="restartQuiz()" class="flex-1 border-2 border-indigo-600 text-indigo-600 px-6 py-4 rounded-lg font-bold text-lg hover:bg-indigo-50 transition-colors flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            Refaire le quiz
                        </button>
                        <a href="{{ route('dashboard.leaders') }}" class="flex-1 gradient-nird text-white px-6 py-4 rounded-lg font-bold text-lg hover:opacity-90 transition-opacity flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Dashboard dirigeants
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function quizApp() {
    return {
        currentQuestion: 0,
        selectedAnswers: {},
        showResults: false,
        results: {},
        questions: [
            {
                icon: '🏫',
                question: 'Quel type d\'établissement êtes-vous ?',
                description: 'Cela nous aidera à personnaliser nos recommandations',
                answers: [
                    { icon: '👶', text: 'École maternelle', detail: 'Enfants de 3 à 6 ans', value: 'preschool' },
                    { icon: '📚', text: 'École primaire', detail: 'Enfants de 6 à 11 ans', value: 'primary' },
                    { icon: '🎓', text: 'Collège ou Lycée', detail: 'Adolescents de 11 à 18 ans', value: 'secondary' },
                    { icon: '🏛️', text: 'Enseignement supérieur', detail: 'Université, IUT, BTS', value: 'higher' },
                ]
            },
            {
                icon: '💻',
                question: 'Combien d\'ordinateurs utilisez-vous ?',
                description: 'Estimation du parc informatique',
                answers: [
                    { icon: '1️⃣', text: 'Moins de 20 postes', detail: 'Petit établissement', value: 'small' },
                    { icon: '2️⃣', text: '20 à 100 postes', detail: 'Établissement moyen', value: 'medium' },
                    { icon: '3️⃣', text: '100 à 500 postes', detail: 'Grand établissement', value: 'large' },
                    { icon: '4️⃣', text: 'Plus de 500 postes', detail: 'Très grand établissement', value: 'xlarge' },
                ]
            },
            {
                icon: '🛠️',
                question: 'Quel est votre niveau technique ?',
                description: 'Compétences de l\'équipe IT',
                answers: [
                    { icon: '🌱', text: 'Débutant', detail: 'Peu d\'expérience avec Linux', value: 'beginner' },
                    { icon: '🌿', text: 'Intermédiaire', detail: 'Quelques connaissances Linux', value: 'intermediate' },
                    { icon: '🌳', text: 'Avancé', detail: 'Bonne maîtrise Linux', value: 'advanced' },
                    { icon: '🚀', text: 'Expert', detail: 'Administrateur système confirmé', value: 'expert' },
                ]
            },
            {
                icon: '⏰',
                question: 'Quel est votre calendrier de migration ?',
                description: 'Quand prévoyez-vous de migrer ?',
                answers: [
                    { icon: '🔥', text: 'Urgent (< 3 mois)', detail: 'Windows 10 arrive en fin de vie', value: 'urgent' },
                    { icon: '📅', text: 'Court terme (3-6 mois)', detail: 'Planification en cours', value: 'short' },
                    { icon: '🗓️', text: 'Moyen terme (6-12 mois)', detail: 'Préparation progressive', value: 'medium' },
                    { icon: '🎯', text: 'Long terme (> 1 an)', detail: 'Réflexion et tests', value: 'long' },
                ]
            },
            {
                icon: '🎯',
                question: 'Quelle est votre priorité principale ?',
                description: 'Qu\'attendez-vous de Linux ?',
                answers: [
                    { icon: '💰', text: 'Économies', detail: 'Réduire les coûts IT', value: 'cost' },
                    { icon: '🌍', text: 'Écologie', detail: 'Réduire l\'impact environnemental', value: 'ecology' },
                    { icon: '🎓', text: 'Pédagogie', detail: 'Enseigner l\'open source', value: 'education' },
                    { icon: '🛡️', text: 'Sécurité', detail: 'Protection des données', value: 'security' },
                ]
            },
        ],
        get progress() {
            return ((this.currentQuestion + 1) / this.questions.length) * 100;
        },
        selectAnswer(questionIndex, answerIndex) {
            this.selectedAnswers[questionIndex] = answerIndex;
        },
        nextQuestion() {
            if (this.currentQuestion < this.questions.length - 1) {
                this.currentQuestion++;
            }
        },
        previousQuestion() {
            if (this.currentQuestion > 0) {
                this.currentQuestion--;
            }
        },
        calculateResults() {
            // Déterminer le profil
            const schoolType = this.questions[0].answers[this.selectedAnswers[0]].value;
            const size = this.questions[1].answers[this.selectedAnswers[1]].value;
            const techLevel = this.questions[2].answers[this.selectedAnswers[2]].value;
            const timeline = this.questions[3].answers[this.selectedAnswers[3]].value;
            const priority = this.questions[4].answers[this.selectedAnswers[4]].value;

            // Profil
            let profile = 'Établissement innovant';
            let profileDescription = 'Votre école est prête à adopter Linux pour moderniser son infrastructure.';

            if (techLevel === 'beginner') {
                profile = 'Débutant motivé';
                profileDescription = 'Vous débutez avec Linux mais êtes motivé. Nous recommandons une distribution facile et un bon accompagnement.';
            } else if (techLevel === 'expert') {
                profile = 'Expert technique';
                profileDescription = 'Votre expertise permet d\'envisager des solutions avancées et personnalisées.';
            }

            // Distribution recommandée
            let distribution = 'Ubuntu';
            let distributionReason = 'Ubuntu offre le meilleur équilibre entre facilité d\'utilisation et support communautaire, idéal pour débuter.';

            if (schoolType === 'preschool' || schoolType === 'primary') {
                distribution = 'Edubuntu';
                distributionReason = 'Edubuntu est spécialement conçu pour l\'enseignement primaire avec des applications éducatives adaptées à l\'âge.';
            } else if (techLevel === 'expert' && size === 'large' || size === 'xlarge') {
                distribution = 'Debian Edu';
                distributionReason = 'Debian Edu offre une solution complète pour les grandes infrastructures avec gestion centralisée et serveur LTSP.';
            } else if (techLevel === 'beginner') {
                distribution = 'Linux Mint';
                distributionReason = 'Linux Mint a une interface familière pour les utilisateurs de Windows, facilitant la transition.';
            }

            // Recommandations
            let recommendations = [
                {
                    title: 'Consulter le guide de migration',
                    description: 'Découvrez notre guide complet pour planifier votre migration vers Linux.',
                    link: '{{ route("linux.migration") }}'
                },
                {
                    title: 'Explorer les alternatives logicielles',
                    description: 'Trouvez les équivalents Linux de tous vos logiciels actuels.',
                    link: '{{ route("alternatives") }}'
                },
            ];

            if (timeline === 'urgent') {
                recommendations.unshift({
                    title: 'Action immédiate requise',
                    description: 'Consultez le dashboard dirigeants pour présenter l\'urgence à votre direction.',
                    link: '{{ route("dashboard.leaders") }}'
                });
            }

            if (priority === 'cost') {
                recommendations.push({
                    title: 'Calculateur d\'économies',
                    description: 'Estimez vos économies avec notre simulateur financier.',
                    link: '{{ route("dashboard.leaders") }}'
                });
            }

            this.results = {
                profile,
                profileDescription,
                distribution,
                distributionReason,
                recommendations
            };

            this.showResults = true;
        },
        restartQuiz() {
            this.currentQuestion = 0;
            this.selectedAnswers = {};
            this.showResults = false;
            this.results = {};
        }
    }
}
</script>
@endsection
