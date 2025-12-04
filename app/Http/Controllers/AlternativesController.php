<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlternativesController extends Controller
{
    public function index()
    {
        $categories = [
            'Systèmes d\'exploitation' => [
                ['proprietary' => 'Windows 10/11', 'alternative' => 'Ubuntu', 'description' => 'Distribution Linux conviviale et stable', 'icon' => '🐧'],
                ['proprietary' => 'Windows 10/11', 'alternative' => 'Linux Mint', 'description' => 'Interface familière pour les utilisateurs Windows', 'icon' => '🍃'],
                ['proprietary' => 'macOS', 'alternative' => 'Debian', 'description' => 'Distribution robuste pour serveurs et postes de travail', 'icon' => '🔧'],
            ],
            'Bureautique' => [
                ['proprietary' => 'Microsoft Office', 'alternative' => 'LibreOffice', 'description' => 'Suite bureautique complète et gratuite', 'icon' => '📝'],
                ['proprietary' => 'Microsoft Word', 'alternative' => 'LibreOffice Writer', 'description' => 'Traitement de texte professionnel', 'icon' => '📄'],
                ['proprietary' => 'Microsoft Excel', 'alternative' => 'LibreOffice Calc', 'description' => 'Tableur puissant avec macros', 'icon' => '📊'],
            ],
            'Communication' => [
                ['proprietary' => 'Microsoft Teams', 'alternative' => 'Jitsi Meet', 'description' => 'Visioconférence open source et sécurisée', 'icon' => '💬'],
                ['proprietary' => 'Zoom', 'alternative' => 'BigBlueButton', 'description' => 'Solution de classe virtuelle pour l\'éducation', 'icon' => '🎥'],
                ['proprietary' => 'Outlook', 'alternative' => 'Thunderbird', 'description' => 'Client email complet et personnalisable', 'icon' => '📧'],
            ],
            'Multimédia' => [
                ['proprietary' => 'Adobe Photoshop', 'alternative' => 'GIMP', 'description' => 'Retouche photo avancée', 'icon' => '🎨'],
                ['proprietary' => 'Adobe Premiere', 'alternative' => 'Kdenlive', 'description' => 'Montage vidéo professionnel', 'icon' => '🎬'],
            ],
            'Éducation' => [
                ['proprietary' => 'Smart Notebook', 'alternative' => 'OpenBoard', 'description' => 'Tableau blanc interactif', 'icon' => '📋'],
                ['proprietary' => 'Google Classroom', 'alternative' => 'Moodle', 'description' => 'Plateforme d\'apprentissage complète', 'icon' => '🎓'],
            ]
        ];

        return view('alternatives', compact('categories'));
    }
}
