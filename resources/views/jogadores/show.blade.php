@extends('layout')
@section('titulo')
Jogadores
@endsection
@section('header')
Informações do Jogador
@endsection
@section('conteudo')

@if(isset($jogador->id_jogador))
ID: {{$jogador->id_jogador}}<br>
Nome: {{$jogador->nome}}<br>
Nacionalidade: {{$jogador->nacionalidade}}<br>
Data de Nascimento: {{$jogador->data_nascimento}}<br>
Id da Equipa: {{$jogador->id_equipa}}<br>
@else
<h1 style="color:#ff0000">ERRO</h1>
@endif

@endsection