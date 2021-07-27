


@extends('templates.template')

@section('content')

<x-app-layout>
<div id="main" class="container-fluid">

    <div id="top" class="row">
        <div class="col-md-9">
        </div>
        
        <div class="col-md-3">
            <a href="adicionar" class="btn btn-primary pull-right h2">Novo Item</a>
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
                            <th>Duracao</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                <tbody>

                <tr>
                    <td>1</td>
                    <td>A Pequena Sereia</td>
                    <td>1h 25m</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="#">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="#">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>A Mulher na Janela</td>
                    <td>1h 40m</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="#">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="#">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Minha Mãe É uma Peça 3</td>
                    <td>1h 51m</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="#">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="#">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                    </td>
                </tr>

                

               
                
                
                
            
                </tbody>
            </table>
        </div>
    </div> <!-- /#list -->
 
    <div id="bottom" class="row">
    <!-- 
    -->
    </div> <!-- /#bottom -->
    
</div>  <!-- /#main -->
</x-app-layout>

@endsection





