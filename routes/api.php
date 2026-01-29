<?php

use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\SymptomController;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/diseases', [DiseaseController::class, 'index']);
Route::get('/diseases/search', [DiseaseController::class, 'search']);
Route::post('/symptoms/analyze', [SymptomController::class, 'analyze']);
Route::get('/symptoms/by-type', [SymptomController::class, 'getSymptomsByType']);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::get('/user', function (Request $request) {
    return $request->user();
});
});
