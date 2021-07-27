<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelEpisodio;
use DB;

class ControladorEpisodios extends Controller
{
    public function irEntradaEpisodios(){
        $episodios = $this->objEpisodio->all();
        return view('entradaEpisodios')->with('episodios', $episodios);
    }
    public function irAdicionarEpisodios() {return view('adicionarEpisodios');}
    public function irVisualizarEpisodios() {return view('visualizarEpisodios');}
    public function editEpisodios($id_episodio) {
        $dados = DB::select('select * from episodios where id_episodio = ?',[$id_episodio]);
        return view('editarEpisodios')->with('dados', $dados);
    }
    public function addEpisodios (Request $request){
        $request->validate([
            'id_episodio'=>'required',
            'ep_titulo'=>'required',
            'sinopse'=>'required',
        ]);

        $query = DB::table('episodios')->insert([
            'id_episodio'=>$request->input('id_episodio'),
            'ep_titulo'=>$request->input('ep_titulo'),
            'sinopse'=>$request->input('sinopse'),
        ]);

        if($query){
            return back()->with('success','Os dados foram inseridos com sucesso');
        }
        else{
            return back()->with('fail','Alguma coisa deu errado');
        }
    }

    public function deleteEpisodios($id_episodio){
        DB::delete('delete from episodios where id_episodio = ?',[$id_episodio]);
        return redirect('entradaEpisodios');
    }

    public function readEpisodios($id_episodio){
        $dados = DB::select('select * from episodios where id_episodio = ?',[$id_episodio]);
        return view('visualizarEpisodios')->with('dados', $dados);
    }

    public function updateEpisodios(Request $request){
        $request->validate([
            'id_episodio'=>'required',
            'ep_titulo'=>'required',
            'sinopse'=>'required',
        ]);
        DB::table('episodios')->where('id_episodio', $request->input('id_episodio'))->update([
            'ep_titulo'=>$request->input('ep_titulo'),
            'sinopse'=>$request->input('sinopse')
        ]);
        return redirect('entradaEpisodios');
    }

    
    private $objEpisodio;

    public function __construct()
    {
        $this->objEpisodio = new ModelEpisodio();        
    }
}
