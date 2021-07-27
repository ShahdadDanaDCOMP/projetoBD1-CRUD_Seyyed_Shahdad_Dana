@extends('templates.template')

@section('content')

<div id="main" class="container-fluid">

    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Adicionar Usuário</h2>
        </div>
 
        <div class="col-md-6">
        </div>
    
        <div class="col-md-3">
            <a href="entradaUsuarios" class="btn btn-primary pull-right h2">Voltar</a>
        </div>
    </div> <!-- /#top -->

    <form action="addUsuarios" method="post" class="row">
        @csrf
         
        <div class="form-group col-md-2">
            <label for="campo1">ID</label>
            <input type="text" class="form-control" name="id_usuario">
        </div>
    
        <div class="form-group col-md-2">
            <label for="campo2">Senha</label>
            <input type="password" class="form-control" name="senha">
        </div>
    
        <div class="form-group col-md-2">
            <label for="campo3">Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
        
        <div class="botao" align-items="center" justify-content="space-evenly">  
            <input class="btn btn-primary" type="submit">
        </div>
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