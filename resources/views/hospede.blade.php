<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Hospedes</title>
</head>
<body>
<h2>foreach</h2>
@foreach $hospedes as $hospede
    {{$hospede->nome}} - {{$hospede->cpf}} - {{$hospede->numTelefone}}<br>
@endforeach
<!--
@foreach ($hospedes as $hospede)
    <a href="{{ route('hospede_show', $hospede->id) }}"> {{$hospede->nome}} - {{$hospede->cpf}} - {{$hospede->numTelefone}}</a>

    <a href="{{ route('hospede_delete', $hospede->id)}}"> [apagar] </a>
    <br>
@endforeach
-->
<!--
<h2>forelse</h2>
@forelse ($hospedes as $hospede)
    {{$hospede->nome}} - {{$hospede->cpf}} - {{$hospede->numTelefone}}<br>
@endforelse
-->
</body>
</html>

