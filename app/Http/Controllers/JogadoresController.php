<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;

class JogadoresController extends Controller
{
    //
    public function index(){
        $jogadores = Jogador::paginate(4);
        return view ('jogadores.index', [
            'jogadores'=>$jogadores
        ]);
    }
    
    public function show(Request $r){
        
        $idJogador = $r->id;
        
        $jogador = Jogador::where('id_jogador',$idJogador)->with('equipas')->first();
        
        
        return view ('jogadores.show', [
            'jogador'=>$jogador
        ]);
        
    }
    
    
    public function pesquisar (Request $r) {
        $nome = $r->nome;
        $jogadores= Jogador::where('nome', 'like', '%' . $nome . '%')->get();
        
        return view('jogadores.resultado', [
            'jogadores'=>$jogadores
        ]);
    }

    
}
