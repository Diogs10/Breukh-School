<?php

use App\Http\Controllers\AnneeScolaireController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\NiveauController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource("/niveaux", NiveauController::class)->only(['index']);

Route::get("/niveaux/{id}",[NiveauController::class,"find"]);

Route::apiResource("/eleves",EleveController::class)->only(['store']);

Route::apiResource("/annee",AnneeScolaireController::class)->only(['store']);

Route::get("classe/{id}/eleves",[ClasseController::class,"eleveById"]);

Route::apiResource("/discipline",DisciplineController::class)->only(['index','store']);

Route::put("/eleves/sortie",[EleveController::class,"modifeEtat"]);