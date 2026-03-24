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
///
    //calcularAreaRet
    public function exibirFormulario8(){
        return view('ex8');
    }
    public function calcularAreaRet(Request $r){
        $altura = $r->input('altura');
        $largura = $r->input('largura');
        $area = $altura*$largura;
        return view('ex8',['area' => $area]);
    }

///
    //calcularAreaRet
    public function exibirFormulario9(){
        return view('ex9');
    }
    public function calcularAreaCirc(Request $r){
        $raio = $r->input('raio');
        $areacirc = M_PI * pow($raio, 2);
        return view('ex9',['areacirc' => $areacirc]);
    }

    //calcularPerimetroRet
    public function exibirFormulario10(){
        return view('ex10');
    }
    public function calcularPerimetroRet(Request $r){
        $altura = $_POST['altura'];
        $largura = $_POST['largura'];

        $periRet = $altura *2 + $largura *2;
        return view('ex10',['periRet' => $periRet]);
    }

     //calcularPerimetroCirc
    public function exibirFormulario11(){
        return view('ex11');
    }
    public function calcularPerimetroCirc(Request $r){
        $raio = $_POST['raio'];

        $periCir = 2*M_PI*$raio;
        return view('ex11',['periCir' => $periCir]);
    }

    //calcularPotencia
    public function exibirFormulario12(){
        return view('ex12');
    }
    public function calcularPotencia(Request $r){
        $base = $_POST['base'];
        $expoente = $_POST['expoente'];

        $potencia = pow($base, $expoente);
        return view('ex12',['potencia' => $potencia]);
    }

    //calcularCM
    public function exibirFormulario13(){
        return view('ex13');
    }
    public function calcularCM(Request $r){
        $metro = $_POST['metro'];

        $cm = $metro * 100;
        return view('ex13',['cm' => $cm]);
    }
}