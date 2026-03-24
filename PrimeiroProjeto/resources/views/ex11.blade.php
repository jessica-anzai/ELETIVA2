@extends('layout')

@section('conteudo')

<h1>Exercício 11 - Perímetro do círculo</h1>
<form method="post" action="/resp11">
    @CSRF
<div class="mb-3">
              <label for="raio" class="form-label">Informe o raio:</label>
              <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($periCir)
<p class="text-success">O perímetro do círculo é {{$periCir}}</p>
@endisset

@endsection