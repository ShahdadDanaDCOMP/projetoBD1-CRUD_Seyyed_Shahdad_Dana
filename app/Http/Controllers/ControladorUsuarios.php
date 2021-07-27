<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUsuario;
use DB;

class ControladorUsuarios extends Controller
{
    public function irEntradaUsuarios(){
        $usuarios = $this->objUsuario->all();
        return view('entradaUsuarios')->with('usuarios', $usuarios);
    }
    public function irAdicionarUsuarios() {return view('adicionarUsuarios');}
    public function irVisualizarUsuarios() {return view('visualizarUsuarios');}
    public function editUsuarios($id_usuario) {
        $dados = DB::select('select * from usuarios where id_usuario = ?',[$id_usuario]);
        return view('editarUsuarios')->with('dados', $dados);
    }
    public function addUsuarios (Request $request){
        $request->validate([
            'id_usuario'=>'required',
            'senha'=>'required',
            'nome'=>'required',
        ]);

        $query = DB::table('usuarios')->insert([
            'id_usuario'=>$request->input('id_usuario'),
            'senha'=>$request->input('senha'),
            'nome'=>$request->input('nome'),
        ]);

        if($query){
            return back()->with('success','Os dados foram inseridos com sucesso');
        }
        else{
            return back()->with('fail','Alguma coisa deu errado');
        }
    }

    public function deleteUsuarios($id_usuario){
        DB::delete('delete from usuarios where id_usuario = ?',[$id_usuario]);
        return redirect('entradaUsuarios');
    }

    public function readUsuarios($id_usuario){
        $dados = DB::select('select * from usuarios where id_usuario = ?',[$id_usuario]);
        return view('visualizarUsuarios')->with('dados', $dados);
    }

    public function updateUsuarios(Request $request){
        $request->validate([
            'id_usuario'=>'required',
            'senha'=>'required',
            'nome'=>'required',
        ]);
        DB::table('usuarios')->where('id_usuario', $request->input('id_usuario'))->update([
            'senha'=>$request->input('senha'),
            'nome'=>$request->input('nome')
        ]);
        return redirect('entradaUsuarios');
    }

    
    private $objUsuario;

    public function __construct()
    {
        $this->objUsuario = new ModelUsuario();        
    }
}
