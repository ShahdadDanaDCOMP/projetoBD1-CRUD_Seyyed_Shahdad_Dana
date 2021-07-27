@extends('templates.template')

@section('content')

<div id="main" class="container-fluid">

    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Gêneros</h2>
        </div>
 
        <div class="col-md-6">
        </div>
 
        <div class="col-md-3">
            <a href="adicionarGeneros" class="btn btn-primary pull-right h2">Novo Gênero</a>
            <a href="selecionar" class="btn btn-primary pull-right h2">Voltar</a>
        </div>
    </div> <!-- /#top -->
 
    <hr/>
        <div id="list" class="row">
            <div class="table-responsive col-md-12">
             
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                <tbody>
                
                
                @foreach($generos->sortBy('id_genero') as $f)
                <tr>
                    <td>{{$f->id_genero}}</td>
                    <td>{{$f->genero}}</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href ='readGeneros{{$f->id_genero}}'>Visualizar</a>
                        <a class="btn btn-warning btn-xs" href ='editGeneros{{$f->id_genero}}'>Editar</a>
                        <a class="btn btn-danger btn-xs"  href ='deleteGeneros{{$f->id_genero}}'>Deletar</a>
                    </td>
                </tr>
                @endforeach
                
            
                </tbody>
            </table>
        </div>
    </div> <!-- /#list -->
 
    <div id="bottom" class="row">
    <!-- 
    -->
    </div> <!-- /#bottom -->
    
</div>  <!-- /#main -->


@endsection