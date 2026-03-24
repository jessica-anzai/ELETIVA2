@extends('layout')

@section('conteudo')

<h1>Exercício 20 - Cálculo de Velocidade Média</h1>
<form method="post" action="/resp20">
    @CSRF
<div class="mb-3">
    <label for="distancia" class="form-label">Informe a distância:</label>
    <input type="number" id="distancia" name="distancia" class="form-control" required="">
</div>

<div class="mb-3">
    <label for="tempo" class="form-label">Informe o tempo:</label>
    <input type="number" id="tempo" name="tempo" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($velMedia)
<p class="text-success">Velocidade média: {{$velMedia}}</p>
@endisset

@endsection