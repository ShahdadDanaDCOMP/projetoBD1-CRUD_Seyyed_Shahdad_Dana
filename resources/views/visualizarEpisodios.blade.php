@extends('templates.template')

@section('content')

<div id="main" class="container-fluid">
    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Visualizar Episodio</h2>
        </div>
 
        <div class="col-md-6">
        </div>
 
        <div class="col-md-3">
            <a href="entradaEpisodios" class="btn btn-primary pull-right h2">Voltar</a>
        </div>
 
    </div> <!-- /#top -->

    
    <div class="row">
        <div class="col-md-2">
            <p><strong>ID</strong></p>
        </div> 

        <div class="col-md-2">
            <p><strong>Nome</strong></p>
        </div> 

        <div class="col-md-2">
            <p><strong>Sinopse</strong></p>
        </div> 
    </div>

    @foreach($dados as $d)
    <div class="row">
        <div class="col-md-2">
            <p>{{$d->id_episodio}}</p>
        </div> 

        <div class="col-md-2">
            <p>{{$d->ep_titulo}}</p>
        </div> 

        <div class="col-md-2">
            <p>{{$d->sinopse}}</p>
        </div> 
    </div>
    @endforeach

    
     
    </div> <!-- /#list -->
 
        <div id="bottom" class="row">
     
    </div> <!-- /#bottom -->
    
     
</div>  <!-- /#main -->

@endsection