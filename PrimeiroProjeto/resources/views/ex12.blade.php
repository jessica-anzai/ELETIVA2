@extends('layout')

@section('conteudo')

<h1>Exercício 12 - Potência</h1>
<form method="post" action="/resp12">
    @CSRF
<div class="mb-3">
    <label for="base" class="form-label">Informe a base:</label>
    <input type="number" id="base" name="base" class="form-control" required="">
</div>

<div class="mb-3">
    <label for="expoente" class="form-label">Informe o expoente:</label>
    <input type="number" id="expoente" name="expoente" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($potencia)
<p class="text-success">A resposta é {{$potencia}}</p>
@endisset

@endsection