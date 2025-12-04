<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'windows10_end' => '2025-10-14',
            'cost_savings' => [
                'licenses' => 150, // par poste/an
                'maintenance' => 80,
                'energy' => 30,
                'total' => 260
            ],
            'environmental' => [
                'co2_reduction' => 35, // pourcentage
                'energy_saving' => 25,
                'hardware_lifespan' => 40
            ],
            'benefits' => [
                'Économies' => 'Jusqu\'à 70% de réduction des coûts IT',
                'Sécurité' => 'Moins de virus et malwares',
                'Performance' => 'Redonne vie aux anciens PC',
                'Pédagogie' => 'Apprentissage de l\'open source',
                'Autonomie' => 'Indépendance technologique'
            ]
        ];

        return view('dashboard-leaders', compact('stats'));
    }
}
