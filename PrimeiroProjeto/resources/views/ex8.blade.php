@extends('layout')

@section('conteudo')

<h1>Exercício 8 - Área do retângulo</h1>
<form method="post" action="/resp8">
    @CSRF
<div class="mb-3">
              <label for="altura" class="form-label">Informe a altura:</label>
              <input type="number" id="altura" name="altura" class="form-control" required="">
            </div><div class="mb-3">
              <label for="largura" class="form-label">Informe a largura:</label>
              <input type="text" id="largura" name="largura" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($area)
<p class="text-success">A área do retângulo é {{$area}}</p>
@endisset

@endsection