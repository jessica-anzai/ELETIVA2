@extends('layout')

@section('conteudo')

<h1>Exercício 5</h1>
<form method="post" action="/resp5">
    @CSRF
<div class="mb-3">
              <label for="numero1" class="form-label">Informe o primeiro valor:</label>
              <input type="number" id="numero1" name="numero1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero2" class="form-label">Informe o segundo valor:</label>
              <input type="text" id="numero2" name="numero2" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="numero3" class="form-label">Informe o terceiro valor:</label>
              <input type="text" id="numero3" name="numero3" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($media)
<p class="text-success">A média dos três valores é {{$media}}</p>
@endisset

@endsection