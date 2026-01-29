<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function analyze(Request $request)
    {
        $request->validate([
            'symptoms' => 'required|array',
            'symptoms.*' => 'string',
        ]);

        $selectedSymptoms = $request->symptoms;

        $analyzer = new \App\Services\SymptomAnalyzer();

    $result = $analyzer->analyzeSymptoms($selectedSymptoms);
    return response()->json($result);

    }



    /**
     * دالة بديلة باستخدام query scope في الموديل
     * (إذا كنت تفضل هذه الطريقة)
     */
    public function getSymptomsByType(Request $request)
    {
        $request->validate([
            'symptom_type' => 'required|in:General Symptoms,Respiratory Symptoms,Digestive Symptoms,Urological Symptoms,Dermatological Symptoms,Neurological Symptoms'
        ]);

        $symptomType = $request->input('symptom_type');

        // استخدام query scope للحصول على الأعراض المباشرة
        $symptoms = Disease::getSymptomsByCategory($symptomType);

        return response()->json([
            'success' => true,
            'symptom_type' => $symptomType,
            'symptoms' => $symptoms,
            'count' => count($symptoms)
        ]);
    }
}
