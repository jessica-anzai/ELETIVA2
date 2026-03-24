@extends('layout')

@section('conteudo')

<h1>Exercício 10 - Perímetro do retângulo</h1>
<form method="post" action="/resp10">
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

@isset($periRet)
<p class="text-success">O perímetro do retângulo é {{$periRet}}</p>
@endisset

@endsection