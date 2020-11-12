@extends('layout')
@section('titulo')
Equipas
@endsection
@section('header')
Equipas
@endsection
@section('conteudo')


<div style="text-align:center">
<form method="post" action="{{route('epesquisa.form')}}">
        @csrf
        <label for="nome">Pesquisa:</label>
        <input type="text" name="nome">
        <button type="submit">Enviar</button>
</form>
</div>


<ul>
@foreach ($equipas as $equipa)
    
<a href="{{route('equipas.show',['id'=>$equipa->id_equipa])}}"><li>{{$equipa->designacao}}
</li>
</a>
@endforeach
</ul>

{{$equipas->render()}}
@endsection