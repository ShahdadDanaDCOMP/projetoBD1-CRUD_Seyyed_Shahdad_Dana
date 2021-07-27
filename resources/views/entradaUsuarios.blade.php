@extends('templates.template')

@section('content')

<div id="main" class="container-fluid">

    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Usuários</h2>
        </div>
 
        <div class="col-md-6">
        </div>
 
        <div class="col-md-3">
            <a href="adicionarUsuarios" class="btn btn-primary pull-right h2">Novo Usuário</a>
            <a href="selecionar" class="btn btn-primary pull-right h2">Voltar</a>
        </div>
    </div> <!-- /#top -->
 
    <hr/>
        <div id="list" class="row">
            <div class="table-responsive col-md-12">
             
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Login</th>
                            <th>Senha</th>
                            <th>Nome</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                <tbody>
                
                
                @foreach($usuarios->sortBy('id_usuario') as $f)
                <tr>
                    <td>{{$f->id_usuario}}</td>
                    <td>••••••••</td>
                    <td>{{$f->nome}}</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href ='readUsuarios{{$f->id_usuario}}'>Visualizar</a>
                        <a class="btn btn-warning btn-xs" href ='editUsuarios{{$f->id_usuario}}'>Editar</a>
                        <a class="btn btn-danger btn-xs"  href ='deleteUsuarios{{$f->id_usuario}}'>Deletar</a>
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