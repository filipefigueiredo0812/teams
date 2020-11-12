@extends('layout')
@section('titulo')
Equipas
@endsection
@section('header')
Resultados
@endsection
@section('conteudo')


@foreach($equipas as $equipa)
<a href="{{route('equipas.show',['id'=>$equipa->id_equipa])}}">
{{$equipa->designacao}}<br>
</a>
@endforeach


@endsection



