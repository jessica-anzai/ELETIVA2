<?php

use App\Http\Controllers\CategoriaController;
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

Route::get('/ex8', [ExercicioController::class, 'exibirFormulario8']);
Route::post('/resp8', [ExercicioController::class, 'calcularAreaRet']);

Route::get('/ex9', [ExercicioController::class, 'exibirFormulario9']);
Route::post('/resp9', [ExercicioController::class, 'calcularAreaCirc']);

Route::get('/ex10', [ExercicioController::class, 'exibirFormulario10']);
Route::post('/resp10', [ExercicioController::class, 'calcularPerimetroRet']);

Route::get('/ex11', [ExercicioController::class, 'exibirFormulario11']);
Route::post('/resp11', [ExercicioController::class, 'calcularPerimetroCirc']);

Route::get('/ex12', [ExercicioController::class, 'exibirFormulario12']);
Route::post('/resp12', [ExercicioController::class, 'calcularPotencia']);

Route::get('/ex13', [ExercicioController::class, 'exibirFormulario13']);
Route::post('/resp13', [ExercicioController::class, 'calcularCM']);

Route::get('/ex14', [ExercicioController::class, 'exibirFormulario14']);
Route::post('/resp14', [ExercicioController::class, 'calcularMI']);

Route::get('/ex15', [ExercicioController::class, 'exibirFormulario15']);
Route::post('/resp15', [ExercicioController::class, 'calcularIMC']);

Route::get('/ex16', [ExercicioController::class, 'exibirFormulario16']);
Route::post('/resp16', [ExercicioController::class, 'calcularDesconto']);

Route::get('/ex17', [ExercicioController::class, 'exibirFormulario17']);
Route::post('/resp17', [ExercicioController::class, 'calcularJurosSimples']);

Route::get('/ex18', [ExercicioController::class, 'exibirFormulario18']);
Route::post('/resp18', [ExercicioController::class, 'calcularJurosComposto']);

Route::get('/ex19', [ExercicioController::class, 'exibirFormulario19']);
Route::post('/resp19', [ExercicioController::class, 'calcularHorasMinutosSegundos']);

Route::get('/ex20', [ExercicioController::class, 'exibirFormulario20']);
Route::post('/resp20', [ExercicioController::class, 'calcularVelocidadeMedia']);

Route::resource('/categorias',CategoriaController::class);
