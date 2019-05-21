@extends('template')
@section('conteudo_principal')
<h3 id="tituloPanelPrincipal">Cadastrar Serviço:</h3>
<div id="form-cadastro">
    <form action="{{route('servico.novo')}}" method="post">
        @include('_shared.formServico') 
        <button type="submit" class="btn btn-default">Cadastrar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection