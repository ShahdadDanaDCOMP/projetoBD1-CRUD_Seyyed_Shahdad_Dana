<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelFilme;
use App\Models\ModelGenero;
use DB;


class Controlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function irLogin() {return view('login');}
    public function irSelecionar() {return view('selecionar');}



    public function irEntradaFilmes(){
        $filmes = $this->objFilme->all();
        return view('entradaFilmes')->with('filmes', $filmes);
    }
    public function irAdicionarFilmes() {return view('adicionarFilmes');}
    public function irVisualizarFilmes() {return view('visualizarFilmes');}
    public function editFilmes($id_filme) {
        $dados = DB::select('select * from filmes where id_filme = ?',[$id_filme]);
        return view('editarFilmes')->with('dados', $dados);
    }
    public function addFilmes (Request $request){
        $request->validate([
            'id_filme'=>'required',
            'titulo'=>'required',
            'ano'=>'required',
            'sinopse'=>'required',
        ]);

        $query = DB::table('filmes')->insert([
            'id_filme'=>$request->input('id_filme'),
            'titulo'=>$request->input('titulo'),
            'ano'=>$request->input('ano'),
            'sinopse'=>$request->input('sinopse'),
        ]);

        if($query){
            return back()->with('success','Os dados foram inseridos com sucesso');
        }
        else{
            return back()->with('fail','Alguma coisa deu errado');
        }
    }

    public function deleteFilmes($id_filme){
        DB::delete('delete from filmes where id_filme = ?',[$id_filme]);
        return redirect('entradaFilmes');
    }

    public function readFilmes($id_filme){
        $dados = DB::select('select * from filmes where id_filme = ?',[$id_filme]);
        return view('visualizarFilmes')->with('dados', $dados);
    }

    public function updateFilmes(Request $request){
        $request->validate([
            'id_filme'=>'required',
            'titulo'=>'required',
            'ano'=>'required',
            'sinopse'=>'required',
        ]);
        DB::table('filmes')->where('id_filme', $request->input('id_filme'))->update([
            'titulo'=>$request->input('titulo'),
            'ano'=>$request->input('ano'),
            'sinopse'=>$request->input('sinopse'),
        ]);
        return redirect('entradaFilmes');
    }

    
    private $objFilme;

    public function __construct()
    {
        $this->objFilme = new ModelFilme();        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    *   public function update(Request $request, $id)
    *   {
    *       //
    *   }
    */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}