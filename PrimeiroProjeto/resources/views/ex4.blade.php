@extends('layout')

@section('conteudo')

<h1>Exercício 4</h1>
<form method="post" action="/resp4">
    @CSRF
<div class="mb-3">
              <label for="numero1" class="form-label">Informe o primeiro valor:</label>
              <input type="number" id="numero1" name="numero1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero2" class="form-label">Informe o segundo valor:</label>
              <input type="text" id="numero2" name="numero2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($erro)
<p class="text-danger">{{$erro}}</p>
@endisset

@isset($div)
<p class="text-success">O valor da divisão é {{$div}}</p>
@endisset

@endsection