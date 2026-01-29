<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = ['name_key', 'symptoms', 'description_key', 'treatment_key'];

    protected $casts = [
        'symptoms' => 'array',
    ];


    /**
     * Scope للحصول على الأعراض حسب التصنيف
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $category
     * @return array
     */
    public function scopeGetSymptomsByCategory($query, $category)
    {
        $diseases = $query->get();
        $symptoms = [];

        $categories = [
            'General Symptoms' => [
                "headache",
                "fever",
                "fatigue",
                "muscle_aches",
                "dizziness",
                "nausea",
                "vomiting",
                "vomiting_blood",
                "loss_of_appetite",
                "night_sweats",
                "difficulty_concentrating",
                "vision_problems",
                "blurred_vision",
                "light_sensitivity",
                "panic_attacks",
                "joint_pain",
                "swelling",
                "stiffness",
                "joint_swelling",
                "skin_rash",
                "severe_skin_itching",
                "hair_loss",
                "pale_skin",
                "bluish_skin_discoloration",
                "unexplained_skin_ulcers",
                "swollen_lymph_nodes",
                "hand_tremors",
                "limb_numbness",
                "facial_numbness",
                "speech_difficulty",
                "involuntary_muscle_twitching",
                "persistent_cold_extremities",
                "temporary_facial_paralysis",
                "difficulty_opening_mouth",
                "sudden_loss_of_balance",
                "tinnitus",
                "rapid_heartbeat",
                "sudden_high_blood_pressure",
                "increased_thirst",
                "frequent_urination",
                "thirst",
                "urine_discoloration",
                "black_stool",
                "coffee_ground_vomiting",
                "mouth_ulcers",
                "gum_bleeding",
                "chronic_bad_breath",
                "frequent_nosebleeds",
                "reduced_sense_of_smell",
                "periorbital_swelling",
                "severe_uterine_cramps"
            ],
            'Respiratory Symptoms' =>[
                "dry_cough",
                "cough",
                "sore_throat",
                "runny_nose",
                "sneezing",
                "shortness_of_breath",
                "chest_pain",
                "chest_tightness",
                "shortness_breath"
            ],
            'Digestive Symptoms' =>[
                "diarrhea",
                "abdominal_pain",
                "abdominal_cramps",
                "abdominal_bloating",
                "nausea",
                "vomiting",
                "loss_of_appetite",
                "black_stool",
                "coffee_ground_vomiting"
            ],
            'Neurological Symptoms' =>[
                "headache",
                "dizziness",
                "difficulty_concentrating",
                "vision_problems",
                "blurred_vision",
                "light_sensitivity",
                "panic_attacks",
                "hand_tremors",
                "limb_numbness",
                "facial_numbness",
                "speech_difficulty",
                "involuntary_muscle_twitching",
                "temporary_facial_paralysis",
                "difficulty_opening_mouth",
                "sudden_loss_of_balance",
                "tinnitus",
                "difficulty_moving_eyes",
                "neck_stiffness"
            ],
            'Dermatological Symptoms' =>[
                "skin_rash",
                "pale_skin",
                "bluish_skin_discoloration",
                "unexplained_skin_ulcers",
                "severe_skin_itching",
                "hair_loss",
                "red_eyes",
                "periorbital_swelling",
                "mouth_ulcers"
            ],
            'Urological Symptoms' =>[
                "frequent_urination",
                "urine_discoloration",
                "severe_uterine_cramps"
            ],
        ];

        if (!isset($categories[$category])) {
            return [];
        }

        $targetSymptoms = $categories[$category];

        foreach ($diseases as $disease) {
            if (isset($disease->symptoms) && is_array($disease->symptoms)) {
                foreach ($disease->symptoms as $symptom) {
                    if (in_array($symptom, $targetSymptoms)) {
                        $symptoms[] = $symptom;
                    }
                }
            }
        }

        return array_values(array_unique($symptoms));
    }
}
