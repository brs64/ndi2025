<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = [
            [
                'category' => 'Numérique Inclusif',
                'title' => 'Guide WCAG 2.1',
                'description' => 'Standards internationaux pour l\'accessibilité web',
                'link' => '#',
                'type' => 'guide'
            ],
            [
                'category' => 'Numérique Responsable',
                'title' => 'Référentiel GR491',
                'description' => 'Guide de bonnes pratiques pour un numérique responsable',
                'link' => '#',
                'type' => 'guide'
            ],
            [
                'category' => 'Numérique Durable',
                'title' => 'Impact environnemental du numérique',
                'description' => 'Étude complète sur l\'empreinte écologique du secteur',
                'link' => '#',
                'type' => 'article'
            ],
        ];

        return view('resources', compact('resources'));
    }
}
