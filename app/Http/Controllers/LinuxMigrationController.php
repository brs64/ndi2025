<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinuxMigrationController extends Controller
{
    public function index()
    {
        $distributions = [
            [
                'name' => 'Ubuntu',
                'description' => 'Distribution la plus populaire, idéale pour débuter',
                'level' => 'Débutant',
                'education_features' => ['Interface intuitive', 'Grande communauté', 'Logiciels éducatifs pré-installés'],
                'logo' => 'ubuntu'
            ],
            [
                'name' => 'Linux Mint',
                'description' => 'Interface similaire à Windows, transition facile',
                'level' => 'Débutant',
                'education_features' => ['Familier pour les utilisateurs Windows', 'Stable', 'Multimédia intégré'],
                'logo' => 'mint'
            ],
            [
                'name' => 'Debian Edu',
                'description' => 'Spécialement conçu pour l\'éducation',
                'level' => 'Intermédiaire',
                'education_features' => ['Serveur LTSP intégré', 'Outils éducatifs complets', 'Gestion centralisée'],
                'logo' => 'debian'
            ],
            [
                'name' => 'Edubuntu',
                'description' => 'Ubuntu avec applications éducatives pré-installées',
                'level' => 'Débutant',
                'education_features' => ['Suite éducative complète', 'Contrôle parental', 'Applications jeunesse'],
                'logo' => 'edubuntu'
            ]
        ];

        return view('linux-migration', compact('distributions'));
    }
}
