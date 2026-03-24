@extends('layout')

@section('conteudo')

<h1>Exercício 19 - Dias para Horas, Minutos e Segundos</h1>
<form method="post" action="/resp19">
    @CSRF
<div class="mb-3">
    <label for="dias" class="form-label">Informe os dias a serem convertidos:</label>
    <input type="number" id="dias" name="dias" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($hora,$minuto,$segundo)
<p class="text-success">Horas: {{$hora}}</p>
<p class="text-success">Minutos: {{$minuto}}</p>
<p class="text-success">Segundos: {{$segundo}}</p>
@endisset

@endsection