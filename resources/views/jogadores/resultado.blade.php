@extends('layout')
@section('titulo')
Jogadores
@endsection
@section('header')
Resultados
@endsection
@section('conteudo')


@foreach($jogadores as $jogador)
<a href="{{route('jogadores.show',['id'=>$jogador->id_jogador])}}">
{{$jogador->nome}}<br>
</a>
@endforeach


@endsection



