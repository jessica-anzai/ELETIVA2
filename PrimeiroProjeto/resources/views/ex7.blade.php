@extends('layout')

@section('conteudo')

<h1>Exercício 7</h1>
<form method="post" action="/resp7">
    @CSRF
<div class="mb-3">
              <label for="temp" class="form-label">Informe a temperatura em Fahrenheit:</label>
              <input type="number" id="temp" name="temp" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($tempc)
<p class="text-success">A temperatura em Celsius é {{$tempc}}°C</p>
@endisset

@endsection