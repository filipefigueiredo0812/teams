@extends('layout')
@section('titulo')
Jogadores
@endsection
@section('header')
Jogadores
@endsection
@section('conteudo')

<div style="text-align:center">
<form method="post" action="{{route('jpesquisa.form')}}">
        @csrf
        <label for="nome">Pesquisa:</label>
        <input type="text" name="nome">
        <button type="submit">Enviar</button>
</form>
</div>





<ul>
@foreach ($jogadores as $jogador)

<a href="{{route('jogadores.show',['id'=>$jogador->id_jogador])}}">
<li>{{$jogador->nome}}
    
</li>
</a>
@endforeach
</ul>


{{$jogadores->render()}}
@endsection




