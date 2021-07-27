@extends('templates.template')

@section('content')

<div id="main" class="container-fluid">

    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Editar</h2>
        </div>
 
        <div class="col-md-6">
        </div>
    
        <div class="col-md-3">
            <a href="entradaGeneros" class="btn btn-primary pull-right h2">Voltar</a>
        </div>
    </div> <!-- /#top -->

    <form action="updateGeneros" method="post" class="row">
        @csrf
        @foreach($dados as $d)
        <div class="form-group col-md-2">
            <label for="campo1">ID</label>
            <input type="text" readonly class="form-control-plaintext" value="{{$d->id_genero}}" name="id_genero">
        </div>
    
        <div class="form-group col-md-2">
            <label for="campo3">Genero</label>
            <input type="text" class="form-control" value="{{$d->genero}}" name="genero">
        </div>
        
        <div class="botao" align-items="center" justify-content="space-evenly">  
            <input class="btn btn-primary" type="submit">
        </div>
        @endforeach
    </form>
    @if(Session::get('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::get('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
    @endif

    </div> <!-- /#list -->
 
    <div id="bottom" class="row">
    </div> <!-- /#bottom -->

    
     
 </div>  <!-- /#main -->


 <style>
.botao {
display: flex;
flex-direction: column;
justify-content: space-evenly;
margin-top: 1%;}

</style>
@endsection