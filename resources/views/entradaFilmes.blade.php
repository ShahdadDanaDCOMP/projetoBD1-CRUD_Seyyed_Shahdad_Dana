@extends('templates.template')

@section('content')

<div id="main" class="container-fluid">

    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Filmes</h2>
        </div>
 
        <div class="col-md-6">
        </div>
 
        <div class="col-md-3">
            <a href="adicionarFilmes" class="btn btn-primary pull-right h2">Novo Item</a>
            <a href="selecionar" class="btn btn-primary pull-right h2">Voltar</a>
        </div>
    </div> <!-- /#top -->
 
    <hr/>
        <div id="list" class="row">
            <div class="table-responsive col-md-12">
             
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Ano</th>
                            <th>Sinopse</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                <tbody>
                
                
                @foreach($filmes->sortBy('id_filme') as $f)
                <tr>
                    <td>{{$f->id_filme}}</td>
                    <td>{{$f->titulo}}</td>
                    <td>{{$f->ano}}</td>
                    <td>{{$f->sinopse}}</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href ='readFilmes{{$f->id_filme}}'>Visualizar</a>
                        <a class="btn btn-warning btn-xs" href ='editFilmes{{$f->id_filme}}'>Editar</a>
                        <a class="btn btn-danger btn-xs"  href ='deleteFilmes{{$f->id_filme}}'>Deletar</a>
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