<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipa;

class EquipasController extends Controller
{
    //
    public function index(){
        //$livros = Livro::all()->sortbydesc('idl');
        $equipas = Equipa::paginate(4);
        return view ('equipas.index', [
            'equipas'=>$equipas
        ]);
    }
    
    public function show(Request $r){
        
        $idEquipa = $r->id;
        
        //$livro = Livro::findOrFail($idLivro);
        
        //$livro = Livro::find($idLivro);
        
        $equipa = Equipa::where('id_equipa',$idEquipa)->with('jogadores')->first();
        
        
        return view ('equipas.show', [
            'equipa'=>$equipa
        ]);
        
    }
    
    public function pesquisar (Request $r) {
        $nome = $r->nome;
        $equipas= Equipa::where('designacao', 'like', '%' . $nome . '%')->get();
        
        return view('equipas.resultado', [
            'equipas'=>$equipas
        ]);
    }
    
}
