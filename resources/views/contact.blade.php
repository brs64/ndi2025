@extends('layouts.app')

@section('title', 'Contact NIRD')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white py-12">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Contactez-nous</h1>
            <p class="text-xl text-gray-600">Une question sur la démarche NIRD ? Nous sommes là pour vous aider.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Envoyez-nous un message</h2>

                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6" role="alert">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                    @csrf

                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Nom complet <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               name="name"
                               id="name"
                               required
                               value="{{ old('name') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-colors @error('name') border-red-500 @enderror"
                               placeholder="Jean Dupont">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email"
                               name="email"
                               id="email"
                               required
                               value="{{ old('email') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-colors @error('email') border-red-500 @enderror"
                               placeholder="jean.dupont@example.com">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Organization Field -->
                    <div>
                        <label for="organization" class="block text-sm font-medium text-gray-700 mb-2">
                            Organisation
                        </label>
                        <input type="text"
                               name="organization"
                               id="organization"
                               value="{{ old('organization') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-colors @error('organization') border-red-500 @enderror"
                               placeholder="Nom de votre entreprise ou organisation">
                        @error('organization')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Message Field -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                            Message <span class="text-red-500">*</span>
                        </label>
                        <textarea name="message"
                                  id="message"
                                  required
                                  rows="5"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-colors resize-none @error('message') border-red-500 @enderror"
                                  placeholder="Parlez-nous de votre projet ou posez-nous vos questions...">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full gradient-nird text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                        Envoyer le message
                    </button>

                    <p class="text-xs text-gray-500 text-center">
                        En soumettant ce formulaire, vous acceptez que vos données soient utilisées pour vous répondre.
                    </p>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8">
                <!-- Info Card -->
                <div class="bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-6">Informations</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold mb-1">Email</h3>
                                <p class="text-blue-100">contact@nird.fr</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold mb-1">Adresse</h3>
                                <p class="text-blue-100">Paris, France</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold mb-1">Horaires</h3>
                                <p class="text-blue-100">Lun - Ven : 9h - 18h</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Card -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Questions fréquentes</h2>
                    <div class="space-y-4" x-data="{ open: null }">
                        <div class="border-b border-gray-200 pb-4">
                            <button @click="open = open === 1 ? null : 1" class="flex justify-between items-center w-full text-left">
                                <span class="font-semibold text-gray-900">Qu'est-ce que NIRD ?</span>
                                <svg class="w-5 h-5 text-gray-500 transition-transform" :class="{ 'rotate-180': open === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open === 1" x-transition class="mt-2 text-gray-600">
                                NIRD est une démarche qui vise à promouvoir un numérique à la fois Inclusif, Responsable et Durable.
                            </div>
                        </div>

                        <div class="border-b border-gray-200 pb-4">
                            <button @click="open = open === 2 ? null : 2" class="flex justify-between items-center w-full text-left">
                                <span class="font-semibold text-gray-900">Comment démarrer ?</span>
                                <svg class="w-5 h-5 text-gray-500 transition-transform" :class="{ 'rotate-180': open === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open === 2" x-transition class="mt-2 text-gray-600">
                                Commencez par notre auto-évaluation gratuite pour identifier vos axes d'amélioration.
                            </div>
                        </div>

                        <div class="pb-4">
                            <button @click="open = open === 3 ? null : 3" class="flex justify-between items-center w-full text-left">
                                <span class="font-semibold text-gray-900">Proposez-vous des formations ?</span>
                                <svg class="w-5 h-5 text-gray-500 transition-transform" :class="{ 'rotate-180': open === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open === 3" x-transition class="mt-2 text-gray-600">
                                Oui, contactez-nous pour en savoir plus sur nos programmes de formation et d'accompagnement.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Card -->
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Besoin d'aide rapidement ?</h3>
                    <p class="text-gray-600 mb-4">Consultez nos ressources et guides pratiques</p>
                    <a href="{{ route('resources') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                        Accéder aux ressources
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
