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
            </tr>
        </thead>
        <tbody>
            @foreach ($listaMarcacao as $marcacao)
            <tr>
                <td>{{$serv->cliente->nome}}</td>
                <td>{{$serv->cliente->telefone}}</td>
                <td>{{$serv->servico->nome}}</td>
                <td>{{$marcacao['horario']}}</td>
                <td>{{$marcacao['dia']}}</td>
                <td>{{$serv->funcionario->nome}}</td>
            </tr>	
            @endforeach	 
        </tbody>
    </table>
</div>
@endsection
