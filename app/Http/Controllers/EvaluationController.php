<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        return view('evaluation');
    }

    public function calculate(Request $request)
    {
        $scores = [
            'inclusif' => $request->input('inclusif', 0),
            'numerique' => $request->input('numerique', 0),
            'responsable' => $request->input('responsable', 0),
            'durable' => $request->input('durable', 0),
        ];

        $total = array_sum($scores);
        $average = $total / count($scores);

        return response()->json([
            'scores' => $scores,
            'total' => $total,
            'average' => $average,
            'level' => $this->getLevel($average),
            'recommendations' => $this->getRecommendations($scores)
        ]);
    }

    private function getLevel($average)
    {
        if ($average >= 4) return 'expert';
        if ($average >= 3) return 'avancé';
        if ($average >= 2) return 'intermédiaire';
        return 'débutant';
    }

    private function getRecommendations($scores)
    {
        $recommendations = [];

        if ($scores['inclusif'] < 3) {
            $recommendations[] = "Améliorez l'accessibilité de vos services numériques avec WCAG 2.1";
        }
        if ($scores['responsable'] < 3) {
            $recommendations[] = "Adoptez des pratiques de développement éco-responsable";
        }
        if ($scores['durable'] < 3) {
            $recommendations[] = "Optimisez la durée de vie de vos équipements numériques";
        }

        return $recommendations;
    }
}
