@extends('layout')

@section('conteudo')

<h1>Exercício 18 - Calcular Juros Composto</h1>
<form method="post" action="/resp18">
    @CSRF
<div class="mb-3">
    <label for="valor" class="form-label">Informe o valor:</label>
    <input type="number" step="0.01" id="valor" name="valor" class="form-control" required="">
</div>

<div class="mb-3">
    <label for="juros" class="form-label">Informe o juros (%):</label>
    <input type="number" step="0.01" id="juros" name="juros" class="form-control" required="">
</div>

<div class="mb-3">
    <label for="periodo" class="form-label">Informe o periodo:</label>
    <input type="number" step="0.01" id="periodo" name="periodo" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($valorFinal)
<p class="text-success">O juros a ser pago será de R${{$valorFinal}}</p>
@endisset

@endsection