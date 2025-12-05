@extends('layouts.app')

@section('title', 'Installer Linux - Guide complet')

@section('content')
<!-- Hero Section -->
<section class="gradient-nird-blue-violet text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Installer Linux
            </h1>
            <p class="text-2xl mb-8 text-blue-100 max-w-3xl mx-auto">
                Guide complet pour installer une distribution Linux sur votre ordinateur
            </p>
        </div>
    </div>
</section>

<!-- Prérequis -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-gray-900 mb-8">Avant de commencer</h2>

        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-8">
            <div class="flex items-start">
                <svg class="w-6 h-6 text-yellow-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                <div>
                    <h3 class="text-lg font-bold text-yellow-800 mb-2">Important</h3>
                    <p class="text-yellow-700">Sauvegardez toutes vos données importantes avant de commencer. L'installation peut effacer les données existantes sur votre disque dur.</p>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Matériel nécessaire</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-nird-green mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">Une clé USB d'au moins 4 Go (vide ou dont les données seront effacées)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-nird-green mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">Un ordinateur compatible (PC ou Mac)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-nird-green mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">Une connexion Internet pour télécharger la distribution</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Étapes d'installation -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-gray-900 mb-12 text-center">Étapes d'installation</h2>

        <!-- Étape 1 -->
        <div class="mb-12">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl mr-4">
                    1
                </div>
                <h3 class="text-2xl font-bold text-gray-900">Télécharger la distribution Linux</h3>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-sm ml-16">
                <p class="text-gray-700 mb-4">Choisissez une distribution Linux adaptée à vos besoins :</p>
                <ul class="space-y-3 mb-4">
                    <li class="flex items-start">
                        <span class="text-blue-600 font-bold mr-2">•</span>
                        <div>
                            <span class="font-semibold">Ubuntu</span> : Idéale pour les débutants, interface conviviale
                            <br><span class="text-sm text-gray-600">Site officiel : ubuntu.com</span>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 font-bold mr-2">•</span>
                        <div>
                            <span class="font-semibold">Linux Mint</span> : Interface familière pour les utilisateurs Windows
                            <br><span class="text-sm text-gray-600">Site officiel : linuxmint.com</span>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 font-bold mr-2">•</span>
                        <div>
                            <span class="font-semibold">Linux NIRD</span> : Spécialement conçu pour l'éducation (collège/lycée)
                            <br><span class="text-sm text-gray-600">Plus d'infos : nird.forge.apps.education.fr/linux/</span>
                        </div>
                    </li>
                </ul>
                <div class="bg-blue-50 border-l-4 border-blue-400 p-4">
                    <p class="text-sm text-blue-800"><strong>Conseil :</strong> Téléchargez le fichier ISO de la distribution depuis le site officiel.</p>
                </div>
            </div>
        </div>

        <!-- Étape 2 -->
        <div class="mb-12">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 rounded-full bg-violet-600 text-white flex items-center justify-center font-bold text-xl mr-4">
                    2
                </div>
                <h3 class="text-2xl font-bold text-gray-900">Créer une clé USB démarrable</h3>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-sm ml-16">
                <p class="text-gray-700 mb-4">Utilisez un logiciel pour créer une clé USB d'installation :</p>

                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Sur Windows</h4>
                        <p class="text-sm text-gray-600 mb-2">Utilisez <strong>Rufus</strong> ou <strong>Balena Etcher</strong></p>
                        <ol class="text-sm text-gray-600 space-y-1 list-decimal list-inside">
                            <li>Téléchargez et installez Rufus</li>
                            <li>Insérez votre clé USB</li>
                            <li>Sélectionnez le fichier ISO téléchargé</li>
                            <li>Cliquez sur "Démarrer"</li>
                        </ol>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Sur Linux/Mac</h4>
                        <p class="text-sm text-gray-600 mb-2">Utilisez <strong>Balena Etcher</strong> ou <strong>dd</strong></p>
                        <ol class="text-sm text-gray-600 space-y-1 list-decimal list-inside">
                            <li>Téléchargez Balena Etcher</li>
                            <li>Sélectionnez le fichier ISO</li>
                            <li>Sélectionnez votre clé USB</li>
                            <li>Cliquez sur "Flash!"</li>
                        </ol>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                    <p class="text-sm text-yellow-800"><strong>Attention :</strong> Toutes les données sur la clé USB seront effacées.</p>
                </div>
            </div>
        </div>

        <!-- Étape 3 -->
        <div class="mb-12">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 rounded-full bg-pink-600 text-white flex items-center justify-center font-bold text-xl mr-4">
                    3
                </div>
                <h3 class="text-2xl font-bold text-gray-900">Démarrer depuis la clé USB</h3>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-sm ml-16">
                <p class="text-gray-700 mb-4">Configurez votre ordinateur pour démarrer depuis la clé USB :</p>

                <ol class="space-y-4">
                    <li class="flex items-start">
                        <span class="font-bold text-pink-600 mr-3">1.</span>
                        <div>
                            <p class="text-gray-700 mb-2">Redémarrez votre ordinateur avec la clé USB insérée</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold text-pink-600 mr-3">2.</span>
                        <div>
                            <p class="text-gray-700 mb-2">Accédez au menu de démarrage (Boot Menu) :</p>
                            <ul class="ml-4 space-y-1 text-sm text-gray-600">
                                <li>• <strong>PC Dell/HP/Lenovo</strong> : Appuyez sur F12 ou F9 au démarrage</li>
                                <li>• <strong>PC ASUS</strong> : Appuyez sur Esc ou F8</li>
                                <li>• <strong>PC Acer</strong> : Appuyez sur F12</li>
                                <li>• <strong>Mac</strong> : Maintenez la touche Option (⌥) au démarrage</li>
                            </ul>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold text-pink-600 mr-3">3.</span>
                        <div>
                            <p class="text-gray-700">Sélectionnez votre clé USB dans la liste des périphériques de démarrage</p>
                        </div>
                    </li>
                </ol>

                <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mt-4">
                    <p class="text-sm text-blue-800"><strong>Astuce :</strong> Si vous ne trouvez pas le menu de démarrage, cherchez "boot menu" suivi du modèle de votre ordinateur sur Internet.</p>
                </div>
            </div>
        </div>

        <!-- Étape 4 -->
        <div class="mb-12">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold text-xl mr-4">
                    4
                </div>
                <h3 class="text-2xl font-bold text-gray-900">Tester ou installer Linux</h3>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-sm ml-16">
                <p class="text-gray-700 mb-4">Au démarrage de Linux, vous aurez deux options :</p>

                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div class="border-2 border-blue-200 rounded-lg p-4 bg-blue-50">
                        <h4 class="font-semibold text-blue-900 mb-2 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            Essayer Linux
                        </h4>
                        <p class="text-sm text-blue-800">Mode Live : testez Linux sans rien modifier sur votre ordinateur. Recommandé pour découvrir le système.</p>
                    </div>
                    <div class="border-2 border-nird-green rounded-lg p-4 bg-nird-green-light">
                        <h4 class="font-semibold text-nird-green mb-2 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            Installer Linux
                        </h4>
                        <p class="text-sm text-nird-green">Installation permanente : Linux sera installé sur votre disque dur. Vous pourrez choisir de remplacer Windows ou de garder les deux.</p>
                    </div>
                </div>

                <div class="bg-nird-green-light border-l-4 border-nird-green p-4">
                    <p class="text-sm text-nird-green"><strong>Conseil :</strong> Commencez par "Essayer Linux" pour vérifier que tout fonctionne correctement avant l'installation.</p>
                </div>
            </div>
        </div>

        <!-- Étape 5 -->
        <div class="mb-12">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 rounded-full bg-nird-green text-white flex items-center justify-center font-bold text-xl mr-4">
                    5
                </div>
                <h3 class="text-2xl font-bold text-gray-900">Suivre l'assistant d'installation</h3>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-sm ml-16">
                <p class="text-gray-700 mb-4">L'installateur vous guidera à travers plusieurs étapes :</p>

                <div class="space-y-4">
                    <div class="border-l-4 border-gray-300 pl-4">
                        <h4 class="font-semibold text-gray-900 mb-1">Langue et clavier</h4>
                        <p class="text-sm text-gray-600">Choisissez le français et la disposition de clavier français</p>
                    </div>
                    <div class="border-l-4 border-gray-300 pl-4">
                        <h4 class="font-semibold text-gray-900 mb-1">Type d'installation</h4>
                        <p class="text-sm text-gray-600 mb-2">Choisissez entre :</p>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• <strong>Remplacer le système</strong> : efface tout et installe uniquement Linux</li>
                            <li>• <strong>Installation à côté</strong> : garde Windows et permet de choisir au démarrage (dual-boot)</li>
                            <li>• <strong>Personnalisé</strong> : pour utilisateurs avancés</li>
                        </ul>
                    </div>
                    <div class="border-l-4 border-gray-300 pl-4">
                        <h4 class="font-semibold text-gray-900 mb-1">Fuseau horaire</h4>
                        <p class="text-sm text-gray-600">Sélectionnez votre ville (ex: Paris pour la France métropolitaine)</p>
                    </div>
                    <div class="border-l-4 border-gray-300 pl-4">
                        <h4 class="font-semibold text-gray-900 mb-1">Compte utilisateur</h4>
                        <p class="text-sm text-gray-600">Créez votre nom d'utilisateur et mot de passe</p>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-4">
                    <p class="text-sm text-yellow-800"><strong>Important :</strong> Si vous choisissez de garder Windows (dual-boot), assurez-vous d'avoir suffisamment d'espace disque libre (au moins 20 Go recommandés).</p>
                </div>
            </div>
        </div>

        <!-- Étape 6 -->
        <div class="mb-12">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 rounded-full bg-purple-600 text-white flex items-center justify-center font-bold text-xl mr-4">
                    6
                </div>
                <h3 class="text-2xl font-bold text-gray-900">Finalisation</h3>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-sm ml-16">
                <p class="text-gray-700 mb-4">Une fois l'installation terminée :</p>

                <ol class="space-y-3">
                    <li class="flex items-start">
                        <span class="font-bold text-purple-600 mr-3">1.</span>
                        <p class="text-gray-700">Redémarrez votre ordinateur</p>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold text-purple-600 mr-3">2.</span>
                        <p class="text-gray-700">Retirez la clé USB lorsqu'on vous le demande</p>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold text-purple-600 mr-3">3.</span>
                        <p class="text-gray-700">Connectez-vous avec votre nom d'utilisateur et mot de passe</p>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold text-purple-600 mr-3">4.</span>
                        <p class="text-gray-700">Installez les mises à jour du système (important pour la sécurité)</p>
                    </li>
                </ol>

                <div class="bg-nird-green-light border-l-4 border-nird-green p-4 mt-4">
                    <p class="text-sm text-nird-green"><strong>Félicitations !</strong> Vous avez installé Linux avec succès. N'hésitez pas à explorer votre nouveau système.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aide supplémentaire -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-gray-900 mb-8 text-center">Besoin d'aide ?</h2>

        <div class="max-w-2xl mx-auto">
            <div class="bg-blue-50 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Ressources en ligne</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                        <span>Forums Ubuntu-fr.org</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                        <span>Documentation officielle Ubuntu</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                        <span>Tutoriels vidéo sur YouTube</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
