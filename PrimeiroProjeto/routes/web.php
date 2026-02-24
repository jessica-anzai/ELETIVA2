<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExercicioController;

Route::get('/paginainicial', function () {
    return view('welcome');
});

Route::get('/exercicio', [ExercicioController::class, 'exibirFormulario']);
Route::post('/resposta', [ExercicioController::class, 'calcularSoma']);

Route::get('/exercicio2', [ExercicioController::class, 'exibirFormulario2']);
Route::post('/resp2', [ExercicioController::class, 'calcularSub']);

Route::get('/ex3', [ExercicioController::class, 'exibirFormulario3']);
Route::post('/resp3', [ExercicioController::class, 'calcularMult']);

Route::get('/ex4', [ExercicioController::class, 'exibirFormulario4']);
Route::post('/resp4', [ExercicioController::class, 'calcularDiv']);

Route::get('/ex5', [ExercicioController::class, 'exibirFormulario5']);
Route::post('/resp5', [ExercicioController::class, 'calcularMedia']);

Route::get('/ex6', [ExercicioController::class, 'exibirFormulario6']);
Route::post('/resp6', [ExercicioController::class, 'calcularTemp']);

Route::get('/ex7', [ExercicioController::class, 'exibirFormulario7']);
Route::post('/resp7', [ExercicioController::class, 'calcularTempC']);
