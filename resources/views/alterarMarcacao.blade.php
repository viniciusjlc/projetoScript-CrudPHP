@extends('template')
@section('conteudo_principal')
<h3 id="tituloPanelPrincipal">Alterar Marcação</h3>
<div id="form-cadastro">
    <form action="{{route('marcacao.editar',['id'=>$marcacao->id])}}" method="post">
        @include('_shared.formMarcacao')
        <button type="submit" class="btn btn-default">Alterar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection