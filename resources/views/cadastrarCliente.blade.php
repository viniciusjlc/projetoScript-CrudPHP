@extends('template')
@section('conteudo_principal')
<h3 id="tituloPanelPrincipal">Cadastrar Cliente</h3>
<div id="form-cadastro">
    <form action="{{route('cliente.novo')}}" method="post">
        @include('_shared.formCliente') 
        <button type="submit" class="btn btn-default">Cadastrar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection