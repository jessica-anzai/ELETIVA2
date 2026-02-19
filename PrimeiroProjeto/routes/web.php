<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

Route::get('/paginainicial', function () {
    return view('welcome');
});

Route::get('/exercicio',['ExercicioController','exibirFormulario']);
Route::post('/resposta', ['ExercicioController','calcularoSoma']);

Route::get('/ex2',['Ex2Controller','exibirFormulario2']);
Route::post('/reps2', ['Ex2Controller','calcularoSub']);