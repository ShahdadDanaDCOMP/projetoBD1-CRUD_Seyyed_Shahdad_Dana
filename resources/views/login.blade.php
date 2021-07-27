@extends('templates.template')
@section('content')

<div class="topo"></div>
<div class="caixa">        
    <h3 class="text-center">Login</h3>
    <div class="caixa">
        <input class="text-center" placeholder="Email" id="email"  type="email" name="email"/>
        <input class="text-center" placeholder="Senha" id="password"  type="password" name="password"/>
        <a href="selecionar" class="btn btn-primary pull-right h2">Entrar</a>
    </div>
</div>

<div class="verti">
    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">
        Não possui cadastro?
    </a>
</div>


<style>
.topo {
margin: auto;
margin-top: 14%;}
.caixa {
height: 200px;
width: 300px;
margin: auto;
align-items: center;
display: flex;
flex-direction: column;
justify-content: space-evenly;
background: #F2F2F2}
.verti {
margin: auto;
align-items: center;
display: flex;
flex-direction: column;
justify-content: space-evenly;
}
</style>
@endsection