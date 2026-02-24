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
        return view('exercicio',['soma' => $soma]);
    }
///
    public function exibirFormulario2(){
        return view('exercicio2');
    }
    public function calcularSub(Request $r){
        $numero1 = $r->input('numero1');
        $numero2 = $r->input('numero2');
        $sub = $numero2 - $numero1;
        return view('exercicio2',['sub' => $sub]);
    }
///
    public function exibirFormulario3(){
        return view('ex3');
    }
    public function calcularMult(Request $r){
        $numero1 = $r->input('numero1');
        $numero2 = $r->input('numero2');
        $mult = $numero2 * $numero1;
        return view('ex3',['mult' => $mult]);
    }
///
    public function exibirFormulario4(){
        return view('ex4');
    }
    public function calcularDiv(Request $r){
        $numero1 = $r->input('numero1');
        $numero2 = $r->input('numero2');
        if($numero2 == 0){
            return view('ex4',['erro'=> 'Não é possível dividir por 0']);
        }else $div = $numero1 / $numero2;
        return view('ex4',['div' => $div]);
    }
/// 
    public function exibirFormulario5(){
        return view('ex5');
    }
    public function calcularMedia(Request $r){
        $numero1 = $r->input('numero1');
        $numero2 = $r->input('numero2');
        $numero3 = $r->input('numero3');
        $media = ($numero1+$numero2+$numero3)/3;
        return view('ex5',['media' => $media]);
    }
///
    public function exibirFormulario6(){
        return view('ex6');
    }
    public function calcularTemp(Request $r){
        $temp = $r->input('temp');
        $tempf=($temp*1.8)+32;
        return view('ex6',['tempf' => $tempf]);
    }
///
        public function exibirFormulario7(){
        return view('ex7');
    }
    public function calcularTempC(Request $r){
        $temp = $r->input('temp');
        $tempc=($temp-32)/1.8;
        return view('ex7',['tempc' => $tempc]);
    }
}