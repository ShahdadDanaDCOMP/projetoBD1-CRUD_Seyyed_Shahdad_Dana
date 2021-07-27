@extends('templates.template')

@section('content')

<div id="main" class="container-fluid">

    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Episódios</h2>
        </div>
 
        <div class="col-md-6">
        </div>
 
        <div class="col-md-3">
            <a href="adicionarEpisodios" class="btn btn-primary pull-right h2">Novo Episódio</a>
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
                            <th>Episódio</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                <tbody>
                
                
                @foreach($episodios->sortBy('id_episodio') as $f)
                <tr>
                    <td>{{$f->id_episodio}}</td>
                    <td>{{$f->ep_titulo}}</td>
                    <td>{{$f->sinopse}}</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href ='readEpisodios{{$f->id_episodio}}'>Visualizar</a>
                        <a class="btn btn-warning btn-xs" href ='editEpisodios{{$f->id_episodio}}'>Editar</a>
                        <a class="btn btn-danger btn-xs"  href ='deleteEpisodios{{$f->id_episodio}}'>Deletar</a>
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