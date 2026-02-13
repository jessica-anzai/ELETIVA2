<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exercicio',function() {
    return view('exercicio');
});

Route::post('/resposta', function (Request $request){
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    $soma = $numero1 + $numero2;
    return ("A soma é $soma");
});