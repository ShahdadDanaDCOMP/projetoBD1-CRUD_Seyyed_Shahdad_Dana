@extends('templates.template')
@section('content')


<div class="topo">
</div>
<div class="caixa">
    <a href="entradaUsuarios" class="btn btn-primary btn-block"> Usuários </a>
    <a href="entradaFilmes" class="btn btn-primary btn-block"> Filmes </a>
    <a href="entradaGeneros" class="btn btn-primary btn-block"> Gêneros </a>
    <a href="entradaEpisodios" class="btn btn-primary btn-block"> Episódios </a>

</div>


<style>
.topo {
margin: auto;
margin-top: 15%;}
.caixa {
height: 180px;
width: 250px;
margin: auto;
align-items: center;
display: flex;
flex-direction: column;
justify-content: space-between;
background: #f9f9f9}
.verti {
margin: auto;
align-items: center;
display: flex;
flex-direction: column;
justify-content: space-evenly;
}
</style>
@endsection