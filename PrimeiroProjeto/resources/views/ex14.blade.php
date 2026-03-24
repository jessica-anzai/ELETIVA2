@extends('layout')

@section('conteudo')

<h1>Exercício 14 - Quilômetros para Milhas</h1>
<form method="post" action="/resp14">
    @CSRF
<div class="mb-3">
    <label for="km" class="form-label">Informe o valor em quilômetros:</label>
    <input type="number" id="km" name="km" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($mi)
<p class="text-success">A resposta é {{$mi}}</p>
@endisset

@endsection