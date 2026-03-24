@extends('layout')

@section('conteudo')

<h1>Exercício 13 - Metro para Centímetro</h1>
<form method="post" action="/resp13">
    @CSRF
<div class="mb-3">
    <label for="metro" class="form-label">Informe o valor em metros:</label>
    <input type="number" id="metro" name="metro" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($cm)
<p class="text-success">A resposta é {{$cm}}</p>
@endisset

@endsection