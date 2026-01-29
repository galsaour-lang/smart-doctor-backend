<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disease;

class DiseaseSeeder extends Seeder
{
    public function run()
    {
        $diseases = [
            [
                'id' => 1,
                'name_key' => 'influenza',
                'symptoms' => ['headache', 'fever', 'dry_cough', 'sore_throat', 'fatigue', 'muscle_aches', 'cough'],
                'description_key' => 'influenza_desc',
                'treatment_key' => 'influenza_treatment',
                'prevention_key' => 'influenza_prevention'
            ],
            [
                'id' => 2,
                'name_key' => 'common_cold',
                'symptoms' => ['dry_cough', 'sore_throat', 'runny_nose', 'sneezing', 'cough'],
                'description_key' => 'common_cold_desc',
                'treatment_key' => 'common_cold_treatment',
                'prevention_key' => 'common_cold_prevention'
            ],
            [
                'id' => 3,
                'name_key' => 'migraine',
                'symptoms' => ['headache', 'nausea', 'dizziness'],
                'description_key' => 'migraine_desc',
                'treatment_key' => 'migraine_treatment',
                'prevention_key' => 'migraine_prevention'
            ],
            [
                'id' => 4,
                'name_key' => 'gastritis',
                'symptoms' => ['nausea', 'diarrhea', 'fatigue', 'vomiting', 'abdominal_pain'],
                'description_key' => 'gastritis_desc',
                'treatment_key' => 'gastritis_treatment',
                'prevention_key' => 'gastritis_prevention'
            ],
            [
                'id' => 5,
                'name_key' => 'allergy',
                'symptoms' => ['sneezing', 'skin_rash', 'red_eyes'],
                'description_key' => 'allergy_desc',
                'treatment_key' => 'allergy_treatment',
                'prevention_key' => 'allergy_prevention'
            ],
            [
                'id' => 6,
                'name_key' => 'allergic_rhinitis',
                'symptoms' => ['sore_throat', 'cough'],
                'description_key' => 'allergic_rhinitis_desc',
                'treatment_key' => 'allergic_rhinitis_treatment',
                'prevention_key' => ''
            ],
            [
                'id' => 7,
                'name_key' => 'asthma',
                'symptoms' => ['shortness_of_breath', 'chest_pain', 'cough', 'shortness_breath', 'chest_tightness'],
                'description_key' => 'asthma_desc',
                'treatment_key' => 'asthma_treatment',
                'prevention_key' => 'asthma_prevention'
            ],
            [
                'id' => 8,
                'name_key' => 'rheumatoid_arthritis',
                'symptoms' => ['joint_swelling', 'headache', 'muscle_aches', 'fatigue'],
                'description_key' => 'rheumatoid_arthritis_desc',
                'treatment_key' => 'rheumatoid_arthritis_treatment',
                'prevention_key' => 'rheumatoid_arthritis_prevention'
            ],
            [
                'id' => 9,
                'name_key' => 'type_2_diabetes',
                'symptoms' => ['increased_thirst', 'loss_of_appetite', 'fatigue', 'diarrhea'],
                'description_key' => 'type_2_diabetes_desc',
                'treatment_key' => 'type_2_diabetes_treatment',
                'prevention_key' => 'type_2_diabetes_prevention'
            ],
            [
                'id' => 10,
                'name_key' => 'diabetes',
                'symptoms' => ['fatigue', 'frequent_urination', 'thirst'],
                'description_key' => 'diabetes_desc',
                'treatment_key' => 'diabetes_treatment',
                'prevention_key' => ''
            ],
            [
                'id' => 11,
                'name_key' => 'depression',
                'symptoms' => ['fatigue', 'loss_of_appetite', 'dizziness', 'night_sweats'],
                'description_key' => 'depression_desc',
                'treatment_key' => 'depression_treatment',
                'prevention_key' => 'depression_prevention'
            ],
            [
                'id' => 12,
                'name_key' => 'otitis_media',
                'symptoms' => ['tinnitus', 'headache', 'sore_throat', 'fever'],
                'description_key' => 'otitis_media_desc',
                'treatment_key' => 'otitis_media_treatment',
                'prevention_key' => 'otitis_media_prevention'
            ],
            [
                'id' => 13,
                'name_key' => 'parkinsons_disease',
                'symptoms' => ['hand_tremors', 'limb_numbness', 'fatigue', 'dizziness'],
                'description_key' => 'parkinsons_disease_desc',
                'treatment_key' => 'parkinsons_disease_treatment',
                'prevention_key' => 'parkinsons_disease_prevention'
            ],
            [
                'id' => 14,
                'name_key' => 'irritable_bowel_syndrome',
                'symptoms' => ['abdominal_cramps', 'abdominal_bloating', 'diarrhea', 'nausea'],
                'description_key' => 'irritable_bowel_syndrome_desc',
                'treatment_key' => 'irritable_bowel_syndrome_treatment',
                'prevention_key' => 'irritable_bowel_syndrome_prevention'
            ],
            [
                'id' => 15,
                'name_key' => 'anemia',
                'symptoms' => ['pale_skin', 'fatigue', 'loss_of_appetite', 'difficulty_concentrating', 'dizziness', 'shortness_breath'],
                'description_key' => 'anemia_desc',
                'treatment_key' => 'anemia_treatment',
                'prevention_key' => 'anemia_prevention'
            ],
            [
                'id' => 16,
                'name_key' => 'hypertension',
                'symptoms' => ['headache', 'dizziness', 'vision_problems'],
                'description_key' => 'hypertension_desc',
                'treatment_key' => 'hypertension_treatment',
                'prevention_key' => ''
            ],
            [
                'id' => 17,
                'name_key' => 'cluster_headache',
                'symptoms' => ['headache', 'light_sensitivity', 'red_eyes', 'panic_attacks'],
                'description_key' => 'cluster_headache_desc',
                'treatment_key' => 'cluster_headache_treatment',
                'prevention_key' => 'cluster_headache_prevention'
            ],
            [
                'id' => 18,
                'name_key' => 'arthritis',
                'symptoms' => ['joint_pain', 'swelling', 'stiffness'],
                'description_key' => 'arthritis_desc',
                'treatment_key' => 'arthritis_treatment',
                'prevention_key' => ''
            ],
            [
                'id' => 19,
                'name_key' => 'hepatitis_a',
                'symptoms' => ['nausea', 'fever', 'diarrhea', 'pale_skin'],
                'description_key' => 'hepatitis_a_desc',
                'treatment_key' => 'hepatitis_a_treatment',
                'prevention_key' => 'hepatitis_a_prevention'
            ],
            [
                'id' => 20,
                'name_key' => 'lupus',
                'symptoms' => ['skin_rash', 'joint_swelling', 'fatigue', 'light_sensitivity'],
                'description_key' => 'lupus_desc',
                'treatment_key' => 'lupus_treatment',
                'prevention_key' => 'lupus_prevention'
            ],
            [
                'id' => 21,
                'name_key' => 'multiple_sclerosis',
                'symptoms' => ['facial_numbness', 'limb_numbness', 'speech_difficulty', 'difficulty_concentrating'],
                'description_key' => 'multiple_sclerosis_desc',
                'treatment_key' => 'multiple_sclerosis_treatment',
                'prevention_key' => 'multiple_sclerosis_prevention'
            ],
            [
                'id' => 22,
                'name_key' => 'gout',
                'symptoms' => ['joint_swelling', 'fever', 'sudden_high_blood_pressure', 'abdominal_bloating'],
                'description_key' => 'gout_desc',
                'treatment_key' => 'gout_treatment',
                'prevention_key' => 'gout_prevention'
            ],
            [
                'id' => 23,
                'name_key' => 'hyperthyroidism',
                'symptoms' => ['hand_tremors', 'increased_thirst', 'sudden_high_blood_pressure', 'hair_loss'],
                'description_key' => 'hyperthyroidism_desc',
                'treatment_key' => 'hyperthyroidism_treatment',
                'prevention_key' => 'hyperthyroidism_prevention'
            ],
            [
                'id' => 24,
                'name_key' => 'meningitis',
                'symptoms' => ['neck_stiffness', 'headache', 'fever', 'light_sensitivity'],
                'description_key' => 'meningitis_desc',
                'treatment_key' => 'meningitis_treatment',
                'prevention_key' => 'meningitis_prevention'
            ],
            [
                'id' => 25,
                'name_key' => 'pneumonia',
                'symptoms' => ['fever', 'cough', 'shortness_breath', 'chest_pain'],
                'description_key' => 'pneumonia_desc',
                'treatment_key' => 'pneumonia_treatment',
                'prevention_key' => ''
            ],
            [
                'id' => 26,
                'name_key' => 'acute_kidney_failure',
                'symptoms' => ['urine_discoloration', 'vomiting_blood', 'pale_skin', 'fatigue'],
                'description_key' => 'acute_kidney_failure_desc',
                'treatment_key' => 'acute_kidney_failure_treatment',
                'prevention_key' => 'acute_kidney_failure_prevention'
            ],
            [
                'id' => 27,
                'name_key' => 'bronchitis',
                'symptoms' => ['cough', 'fatigue', 'shortness_breath', 'fever'],
                'description_key' => 'bronchitis_desc',
                'treatment_key' => 'bronchitis_treatment',
                'prevention_key' => ''
            ],
            [
                'id' => 28,
                'name_key' => 'lyme_disease',
                'symptoms' => ['swollen_lymph_nodes', 'fever', 'muscle_aches', 'severe_skin_itching'],
                'description_key' => 'lyme_disease_desc',
                'treatment_key' => 'lyme_disease_treatment',
                'prevention_key' => 'lyme_disease_prevention'
            ],
            [
                'id' => 29,
                'name_key' => 'bells_palsy',
                'symptoms' => ['temporary_facial_paralysis', 'difficulty_opening_mouth', 'facial_numbness', 'speech_difficulty'],
                'description_key' => 'bells_palsy_desc',
                'treatment_key' => 'bells_palsy_treatment',
                'prevention_key' => 'bells_palsy_prevention'
            ],
            [
                'id' => 30,
                'name_key' => 'raynauds_syndrome',
                'symptoms' => ['persistent_cold_extremities', 'bluish_skin_discoloration', 'limb_numbness', 'joint_swelling'],
                'description_key' => 'raynauds_syndrome_desc',
                'treatment_key' => 'raynauds_syndrome_treatment',
                'prevention_key' => 'raynauds_syndrome_prevention'
            ],
            [
                'id' => 31,
                'name_key' => 'acute_pancreatitis',
                'symptoms' => ['abdominal_cramps', 'nausea', 'fever', 'rapid_heartbeat'],
                'description_key' => 'acute_pancreatitis_desc',
                'treatment_key' => 'acute_pancreatitis_treatment',
                'prevention_key' => 'acute_pancreatitis_prevention'
            ],
            [
                'id' => 32,
                'name_key' => 'endometriosis',
                'symptoms' => ['severe_uterine_cramps', 'abdominal_cramps', 'fatigue', 'pale_skin'],
                'description_key' => 'endometriosis_desc',
                'treatment_key' => 'endometriosis_treatment',
                'prevention_key' => 'endometriosis_prevention'
            ],
            [
                'id' => 33,
                'name_key' => 'autoimmune_hepatitis',
                'symptoms' => ['black_stool', 'fever', 'nausea', 'pale_skin'],
                'description_key' => 'autoimmune_hepatitis_desc',
                'treatment_key' => 'autoimmune_hepatitis_treatment',
                'prevention_key' => 'autoimmune_hepatitis_prevention'
            ],
            [
                'id' => 34,
                'name_key' => 'optic_neuritis',
                'symptoms' => ['difficulty_moving_eyes', 'blurred_vision', 'light_sensitivity', 'difficulty_concentrating'],
                'description_key' => 'optic_neuritis_desc',
                'treatment_key' => 'optic_neuritis_treatment',
                'prevention_key' => 'optic_neuritis_prevention'
            ],
            [
                'id' => 35,
                'name_key' => 'crohns_disease',
                'symptoms' => ['abdominal_cramps', 'diarrhea', 'unexplained_skin_ulcers', 'abdominal_bloating'],
                'description_key' => 'crohns_disease_desc',
                'treatment_key' => 'crohns_disease_treatment',
                'prevention_key' => 'crohns_disease_prevention'
            ],
            [
                'id' => 36,
                'name_key' => 'guillain_barre_syndrome',
                'symptoms' => ['limb_numbness', 'sudden_loss_of_balance', 'involuntary_muscle_twitching', 'speech_difficulty'],
                'description_key' => 'guillain_barre_syndrome_desc',
                'treatment_key' => 'guillain_barre_syndrome_treatment',
                'prevention_key' => 'guillain_barre_syndrome_prevention'
            ],
            [
                'id' => 37,
                'name_key' => 'bleeding_peptic_ulcer',
                'symptoms' => ['coffee_ground_vomiting', 'black_stool', 'nausea', 'pale_skin'],
                'description_key' => 'bleeding_peptic_ulcer_desc',
                'treatment_key' => 'bleeding_peptic_ulcer_treatment',
                'prevention_key' => 'bleeding_peptic_ulcer_prevention'
            ],
            [
                'id' => 38,
                'name_key' => 'gingivitis',
                'symptoms' => ['gum_bleeding', 'sore_throat', 'mouth_ulcers'],
                'description_key' => 'gingivitis_desc',
                'treatment_key' => 'gingivitis_treatment',
                'prevention_key' => 'gingivitis_prevention'
            ],
            [
                'id' => 39,
                'name_key' => 'chronic_sinusitis',
                'symptoms' => ['chronic_bad_breath', 'runny_nose', 'sneezing', 'reduced_sense_of_smell'],
                'description_key' => 'chronic_sinusitis_desc',
                'treatment_key' => 'chronic_sinusitis_treatment',
                'prevention_key' => 'chronic_sinusitis_prevention'
            ],
            [
                'id' => 40,
                'name_key' => 'severe_hypertension',
                'symptoms' => ['frequent_nosebleeds', 'sudden_high_blood_pressure', 'rapid_heartbeat', 'chest_pain'],
                'description_key' => 'severe_hypertension_desc',
                'treatment_key' => 'severe_hypertension_treatment',
                'prevention_key' => 'severe_hypertension_prevention'
            ],
            [
                'id' => 41,
                'name_key' => 'long_covid',
                'symptoms' => ['reduced_sense_of_smell', 'fatigue', 'shortness_of_breath', 'difficulty_concentrating'],
                'description_key' => 'long_covid_desc',
                'treatment_key' => 'long_covid_treatment',
                'prevention_key' => 'long_covid_prevention'
            ],
            [
                'id' => 42,
                'name_key' => 'severe_seasonal_allergy',
                'symptoms' => ['periorbital_swelling', 'sneezing', 'red_eyes', 'severe_skin_itching'],
                'description_key' => 'severe_seasonal_allergy_desc',
                'treatment_key' => 'severe_seasonal_allergy_treatment',
                'prevention_key' => 'severe_seasonal_allergy_prevention'
            ]
        ];

        foreach ($diseases as $d) {
            Disease::updateOrCreate(
                ['id' => $d['id']],
                [
                    'name_key' => $d['name_key'],
                    'description_key' => $d['description_key'],
                    'treatment_key' => $d['treatment_key'],
                    'symptoms' => $d['symptoms'],
                ]
            );
        }
    }
}
