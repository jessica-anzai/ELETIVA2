@extends('layout')

@section('conteudo')

<h1>Exercício 15 - Índice de Massa Corporal (IMC)</h1>
<form method="post" action="/resp15">
    @CSRF
<div class="mb-3">
    <label for="peso" class="form-label">Informe o seu peso (kg):</label>
    <input type="number" id="peso" name="peso" class="form-control" required="">
</div>

<div class="mb-3">
    <label for="altura" class="form-label">Informe a sua altura (m):</label>
    <input type="number" step="0.01" id="altura" name="altura" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($imc,$texto)
<p class="text-success">O seu IMC é {{$imc}}</p>
<p class="text-success">{{$texto}}</p>
@endisset

@endsection