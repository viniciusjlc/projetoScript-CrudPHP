@extends('template')

@section('conteudo_principal')


<h3 id="tituloPanelPrincipal">Marcação:</h3>
@if (session('msg'))
<div class="alert alert-success">
    <ul>
        <li>{{session('msg')}}</li>
    </ul>
</div>
@endif
<div class="tabela-visualizacao">                  
    <table class="padraoTable">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Telefone</th>
                <th>Serviço</th>
                <th>Horario</th>
                <th>Dia</th>
                <th>Funcionario</th>
                <th id="coluna-acao">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listaMarcacao as $marcacao)
            <tr>
                <td>{{$marcacao->cliente->nome}}</td>
                <td>{{$marcacao->cliente->telefone}}</td>
                <td>{{$marcacao->servico->nome}}</td>
                <td>{{$marcacao['horario']}}</td>
                <td>{{$marcacao['data']}}</td>
                <td>{{$marcacao->funcionario->nome}}</td>
                <td align="center">      
                    <button type="button" onclick="window.location.href='{{route('marcacao.alterar', ['id'=>$marcacao->id])}}'" class="btn btn-default">Alterar</button>
                    <button type="button" onclick="window.location.href='{{route('marcacao.excluir', ['id'=>$marcacao->id])}}'" class="btn btn-default">Excluir</button>
                </td>
            </tr>	
            @endforeach	 
        </tbody>
    </table>
</div>
@endsection
