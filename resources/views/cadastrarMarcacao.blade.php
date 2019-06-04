@extends('template')
@section('conteudo_principal')
<h3 id="tituloPanelPrincipal">Cadastrar Marcação</h3>
<div id="form-cadastro">
    <form action="{{route('marcacao.novo')}}" method="post">
        @include('_shared.formMarcacao') 
        <button type="submit" class="btn btn-default">Cadastrar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection