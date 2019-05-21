@extends('template')


@section('conteudo_principal')
<h3 id="tituloPanelPrincipal">Alterar Funcionario</h3>
<div id="form-cadastro">
    <form action="{{route('funcionario.editar', $funcionario->id)}}" method="post">
        @include('_shared.formFuncionario')
        <button type="submit" class="btn btn-default">Alterar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection