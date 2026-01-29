<?php

use Illuminate\Support\Facades\Route;
use App\Models\Disease;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-analyze', function () {


    // $symptoms=Disease::pluck('symptoms');
    // return $symptoms;
    $symptoms = [
        // 'fatigue',
        // 'shortness_breath',
        // 'diarrhea'
        'reduced_sense_of_smell'
    ];

    $analyzer = new \App\Services\SymptomAnalyzer();

    $result = $analyzer->analyzeSymptoms($symptoms);

    return response()->json($result);
});
