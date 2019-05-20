@extends('template')


@section('conteudo_principal')
<h3 id="tituloPanelPrincipal">Alterar Cliente</h3>
<div id="form-cadastro">
    <form action="{{route('cliente.editar', $cliente->id)}}" method="post">
        @include('_shared.formCliente')
        <button type="submit" class="btn btn-default">Alterar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection