@extends('template')


@section('conteudo_principal')
<h3 id="tituloPanelPrincipal">Alterar Serviço</h3>
<div id="form-cadastro">
    <form action="{{route('servico.editar', $servico->id)}}" method="post">
        @include('_shared.formServico')
        <button type="submit" class="btn btn-default">Alterar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection