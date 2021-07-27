<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelGenero;
use DB;

class ControladorGeneros extends Controller
{
    public function irEntradaGeneros(){
        $generos = $this->objGenero->all();
        return view('entradaGeneros')->with('generos', $generos);
    }
    public function irAdicionarGeneros() {return view('adicionarGeneros');}
    public function irVisualizarGeneros() {return view('visualizarGeneros');}
    public function editGeneros($id_genero) {
        $dados = DB::select('select * from generos where id_genero = ?',[$id_genero]);
        return view('editarGeneros')->with('dados', $dados);
    }
    public function addGeneros (Request $request){
        $request->validate([
            'id_genero'=>'required',
            'genero'=>'required',
        ]);

        $query = DB::table('generos')->insert([
            'id_genero'=>$request->input('id_genero'),
            'genero'=>$request->input('genero'),
        ]);

        if($query){
            return back()->with('success','Os dados foram inseridos com sucesso');
        }
        else{
            return back()->with('fail','Alguma coisa deu errado');
        }
    }

    public function deleteGeneros($id_genero){
        DB::delete('delete from generos where id_genero = ?',[$id_genero]);
        return redirect('entradaGeneros');
    }

    public function readGeneros($id_genero){
        $dados = DB::select('select * from generos where id_genero = ?',[$id_genero]);
        return view('visualizarGeneros')->with('dados', $dados);
    }

    public function updateGeneros(Request $request){
        $request->validate([
            'id_genero'=>'required',
            'genero'=>'required',
        ]);
        DB::table('generos')->where('id_genero', $request->input('id_genero'))->update([
            'genero'=>$request->input('genero'),
        ]);
        return redirect('entradaGeneros');
    }

    
    private $objGenero;

    public function __construct()
    {
        $this->objGenero = new ModelGenero();        
    }
}
