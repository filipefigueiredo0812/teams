
@extends('layout')
@section('titulo')
Equipas
@endsection
@section('header')
Detalhes da Equipa
@endsection
@section('conteudo')
@if(isset($equipa->id_equipa))
ID: {{$equipa->id_equipa}}<br>
Designação: {{$equipa->designacao}}<br>
Designação Curta: {{$equipa->designacao_curta}}<br>
Localidade: {{$equipa->localidade}}
@else
<h1 style="color:#ff0000">ERRO</h1>
@endif
@endsection