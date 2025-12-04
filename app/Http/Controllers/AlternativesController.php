<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlternativesController extends Controller
{
    public function index()
    {
        $categories = [
            'Bureautique' => [
                ['proprietary' => 'Microsoft Office', 'alternative' => 'LibreOffice', 'description' => 'Suite bureautique complète et gratuite', 'icon' => '📝'],
                ['proprietary' => 'Microsoft Word', 'alternative' => 'LibreOffice Writer', 'description' => 'Traitement de texte professionnel', 'icon' => '📄'],
                ['proprietary' => 'Microsoft Excel', 'alternative' => 'LibreOffice Calc', 'description' => 'Tableur puissant avec macros', 'icon' => '📊'],
                ['proprietary' => 'Microsoft PowerPoint', 'alternative' => 'LibreOffice Impress', 'description' => 'Présentations dynamiques', 'icon' => '📽️'],
            ],
            'Communication' => [
                ['proprietary' => 'Microsoft Teams', 'alternative' => 'Jitsi Meet', 'description' => 'Visioconférence open source et sécurisée', 'icon' => '💬'],
                ['proprietary' => 'Zoom', 'alternative' => 'BigBlueButton', 'description' => 'Solution de classe virtuelle pour l\'éducation', 'icon' => '🎥'],
                ['proprietary' => 'Outlook', 'alternative' => 'Thunderbird', 'description' => 'Client email complet et personnalisable', 'icon' => '📧'],
            ],
            'Multimédia' => [
                ['proprietary' => 'Adobe Photoshop', 'alternative' => 'GIMP', 'description' => 'Retouche photo avancée', 'icon' => '🎨'],
                ['proprietary' => 'Adobe Premiere', 'alternative' => 'Kdenlive', 'description' => 'Montage vidéo professionnel', 'icon' => '🎬'],
                ['proprietary' => 'Audacity (gratuit)', 'alternative' => 'Audacity', 'description' => 'Édition audio multipiste', 'icon' => '🎵'],
            ],
            'Éducation' => [
                ['proprietary' => 'Smart Notebook', 'alternative' => 'OpenBoard', 'description' => 'Tableau blanc interactif', 'icon' => '📋'],
                ['proprietary' => 'Kahoot (payant)', 'alternative' => 'H5P', 'description' => 'Contenu interactif et quiz', 'icon' => '🎮'],
                ['proprietary' => 'Google Classroom', 'alternative' => 'Moodle', 'description' => 'Plateforme d\'apprentissage complète', 'icon' => '🎓'],
            ],
            'Développement' => [
                ['proprietary' => 'Visual Studio', 'alternative' => 'VSCode / VSCodium', 'description' => 'Éditeur de code moderne', 'icon' => '💻'],
                ['proprietary' => 'Scratch (en ligne)', 'alternative' => 'Scratch Desktop', 'description' => 'Programmation visuelle pour débutants', 'icon' => '🐱'],
            ]
        ];

        return view('alternatives', compact('categories'));
    }
}
