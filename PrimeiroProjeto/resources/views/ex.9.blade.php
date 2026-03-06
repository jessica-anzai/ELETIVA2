@extends('layout')

@section('conteudo')

<h1>Exercício 8 - Área do retângulo</h1>
<form method="post" action="/resp8">
    @CSRF
<div class="mb-3">
              <label for="raio" class="form-label">Informe o raio:</label>
              <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($areacirc)
<p class="text-success">A área do círculo é {{$areacirc}}</p>
@endisset

@endsection