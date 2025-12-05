<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlternativesController extends Controller
{
    public function index()
    {
        $categories = [
            'Outils de Bureautique' => [
                ['proprietary' => 'Microsoft Office', 'alternative' => 'LibreOffice', 'description' => 'Suite bureautique complète et gratuite', 'icon' => '📝', 'price' => '149€/an/utilisateur'],
                ['proprietary' => 'Google Docs', 'alternative' => 'OnlyOffice', 'description' => 'Édition collaborative de documents', 'icon' => '📄', 'price' => '5,75€/mois/utilisateur'],
                ['proprietary' => 'Adobe Acrobat', 'alternative' => 'PDFsam', 'description' => 'Outils de manipulation de fichiers PDF', 'icon' => '📚', 'price' => '179,88€/an/utilisateur'],
            ],
            'Communication' => [
                ['proprietary' => 'Microsoft Teams', 'alternative' => 'Jitsi Meet', 'description' => 'Visioconférence open source et sécurisée', 'icon' => '💬', 'price' => '4€/mois/utilisateur'],
                ['proprietary' => 'Zoom', 'alternative' => 'BigBlueButton', 'description' => 'Solution de classe virtuelle pour l\'éducation', 'icon' => '🎥', 'price' => '13,99€/mois/hôte'],
                ['proprietary' => 'Outlook', 'alternative' => 'Thunderbird', 'description' => 'Client email complet et personnalisable', 'icon' => '📧', 'price' => 'Inclus avec Office 365'],
            ],
            'Multimédia' => [
                ['proprietary' => 'Adobe Photoshop', 'alternative' => 'GIMP', 'description' => 'Retouche photo avancée', 'icon' => '🎨', 'price' => '23,99€/mois/utilisateur'],
                ['proprietary' => 'Adobe Premiere', 'alternative' => 'Kdenlive', 'description' => 'Montage vidéo professionnel', 'icon' => '🎬', 'price' => '23,99€/mois/utilisateur'],
            ],
            'Éducation' => [
                ['proprietary' => 'Smart Notebook', 'alternative' => 'OpenBoard', 'description' => 'Tableau blanc interactif', 'icon' => '📋', 'price' => '399€/licence'],
                ['proprietary' => 'Google Classroom', 'alternative' => 'Moodle', 'description' => 'Plateforme d\'apprentissage complète', 'icon' => '🎓', 'price' => 'Gratuit (Google Workspace Education)'],
            ],
            'Systèmes d\'exploitation' => [
                ['proprietary' => 'Windows 10/11', 'alternative' => 'Ubuntu', 'description' => 'Distribution Linux conviviale et stable', 'icon' => '🐧', 'price' => '145€/poste'],
                ['proprietary' => 'Windows 10/11', 'alternative' => 'Linux Mint', 'description' => 'Interface familière pour les utilisateurs Windows', 'icon' => '🍃', 'price' => '145€/poste'],
                ['proprietary' => 'Windows 10/11', 'alternative' => 'Debian', 'description' => 'Distribution robuste pour serveurs et postes de travail', 'icon' => '🔧', 'price' => '145€/poste'],
            ],
            'Systèmes d\'exploitation pour l\'éducation' => [
                ['proprietary' => 'Windows 10/11', 'alternative' => 'Linux NIRD', 'description' => 'Distribution GNU/Linux légère adaptée au collège et lycée, avec suite complète de logiciels libres pour usage scolaire (dont NSI)', 'icon' => '🎓', 'price' => '145€/poste'],
                ['proprietary' => 'Windows 10/11', 'alternative' => 'PrimTux', 'description' => 'Distribution libre spécialement développée pour les écoles primaires, avec ressources pédagogiques et profils adaptés aux 3 cycles', 'icon' => '🏫', 'price' => '145€/poste'],
            ]
        ];

        return view('alternatives', compact('categories'));
    }
}
