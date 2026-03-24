@extends('layout')

@section('conteudo')

<h1>Exercício 16 - Calcular desconto</h1>
<form method="post" action="/resp16">
    @CSRF
<div class="mb-3">
    <label for="preco" class="form-label">Informe o preço:</label>
    <input type="number" step="0.01" id="preco" name="preco" class="form-control" required="">
</div>

<div class="mb-3">
    <label for="desconto" class="form-label">Informe o desconto (%):</label>
    <input type="number" step="0.01" id="desconto" name="desconto" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($valorFinal)
<p class="text-success">O valor final será R${{$valorFinal}}</p>
@endisset

@endsection