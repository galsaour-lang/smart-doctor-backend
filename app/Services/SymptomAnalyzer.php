<?php

namespace App\Services;

use App\Models\Disease;

class SymptomAnalyzer
{

    public function analyzeSymptoms(array $symptoms)
{
    // Get all diseases from DB
    $diseases = Disease::all();

    $possibleDiseases = $diseases->map(function ($disease) use ($symptoms) {
        // Matching symptoms
        $matchingSymptoms = array_values(array_filter(
            $disease->symptoms,
            fn($symptom) => in_array($symptom, $symptoms)
        ));

        // Calculate score with weights
        $score = 0;
        $totalPossibleScore = count($disease->symptoms);

        if (count($matchingSymptoms) > 0) {
            // Basic score: matching symptoms
            $baseScore = (count($matchingSymptoms) / $totalPossibleScore) * 70;

            // Bonus if user has many symptoms of this disease
            $coverageScore = (count($matchingSymptoms) / count($symptoms)) * 30;

            $score = $baseScore + $coverageScore;
        }

        // Return disease with extra fields
        return [
            'id'                => $disease->id,
            'name_key'          => $disease->name_key,
            'symptoms'          => $disease->symptoms,
            'description_key'   => $disease->description_key,
            'treatment_key'     => $disease->treatment_key,
            'matchPercentage'   => round(min($score, 100)), // لا تتعدى 100%
            'matchingSymptoms'  => $matchingSymptoms,
            'matchedCount'      => count($matchingSymptoms),
            'totalDiseaseSymptoms' => $totalPossibleScore,
        ];
    })
    // Filter diseases that have at least ONE matching symptom
    ->filter(fn($d) => $d['matchedCount'] > 0)
    // Sort by matchPercentage DESC
    ->sortByDesc('matchPercentage')
    ->values();

    return [
        'selectedSymptoms' => $symptoms,
        'possibleDiseases' => $possibleDiseases,
        'generalAdvice' => 'This is a preliminary analysis. Please consult a healthcare professional for accurate diagnosis.',
    ];
}
}
