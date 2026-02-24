@extends('layout')

@section('conteudo')

<h1>Exercício 6</h1>
<form method="post" action="/resp6">
    @CSRF
<div class="mb-3">
              <label for="temp" class="form-label">Informe a temperatura (Celsius):</label>
              <input type="number" id="temp" name="temp" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($tempf)
<p class="text-success">A temperatura em Fahrenheit é {{$tempf}}°F</p>
@endisset

@endsection