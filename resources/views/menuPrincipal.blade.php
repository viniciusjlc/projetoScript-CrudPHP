@extends('template')

@section('conteudo_principal')

<h3 id="tituloPanelPrincipal">Bem-vindo {{session('funcNome')}}, resumo do Salão:</h3>
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
                <td>{{$marcacao->cliente->nome}}</td>
                <td>{{$marcacao->cliente->telefone}}</td>
                <td>{{$marcacao->servico->nome}}</td>
                <td>{{$marcacao['horario']}}</td>
                <td>{{$marcacao['data']}}</td>
                <td>{{$marcacao->funcionario->nome}}</td>
            </tr>	
            @endforeach	 
        </tbody>
    </table>

</div>
<h3 id="valorCaixa">Valor total em caixa: R$320,00</h3>
<button type="button" onclick="window.location.href='{{route('caixa.vendas')}}'" class="botaoFecharCaixa botao_cor">Fechar o dia</button>
@endsection
