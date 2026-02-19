<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExercicioController extends Controller{
    public function exibirFormulario(){
        return view('exercicio');
    }

    public function calcularSoma(Request $r){
         $numero1 = $r->input('numero1');
        $numero2 = $r->input('numero2');
        $soma = $numero1 + $numero2;
        return ("A soma é $soma");
    }

    public function exibirFormulario2(){
        return view('exercicio2');
    }

    public function calcularSub(Request $r){
         $numero1 = $r->input('numero1');
        $numero2 = $r->input('numero2');
        $subtracao = $numero2 - $numero1;
        return ("A subtração é $subtracao");
    }
}
?>