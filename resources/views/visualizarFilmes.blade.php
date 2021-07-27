@extends('templates.template')

@section('content')

<div id="main" class="container-fluid">
    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Visualizar Filme</h2>
        </div>
 
        <div class="col-md-6">
        </div>
 
        <div class="col-md-3">
            <a href="entradaFilmes" class="btn btn-primary pull-right h2">Voltar</a>
        </div>
 
    </div> <!-- /#top -->

    
    <div class="row">
        <div class="col-md-2">
            <p><strong>ID</strong></p>
        </div> 

        <div class="col-md-2">
            <p><strong>Título</strong></p>
        </div> 

        <div class="col-md-2">
            <p><strong>Ano</strong></p>
        </div> 

        <div class="col-md-2">
            <p><strong>Sinopse</strong></p>
        </div> 
    </div>

    @foreach($dados as $d)
    <div class="row">
        <div class="col-md-2">
            <p>{{$d->id_filme}}</p>
        </div> 

        <div class="col-md-2">
            <p>{{$d->titulo}}</p>
        </div> 

        <div class="col-md-2">
            <p>{{$d->ano}}</p>
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