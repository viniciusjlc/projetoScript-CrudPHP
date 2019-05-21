@extends('template')
@section('conteudo_principal')
<h3 id="tituloPanelPrincipal">Cadastrar Funcionario</h3>
<div id="form-cadastro">
    <form action="{{route('funcionario.novo')}}" method="get">
        @include('_shared.formFuncionario') 
        <button type="submit" class="btn btn-default">Cadastrar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection