@extends('template')

@section('conteudo_principal')

<div id="panelPrincipal">
    <a id="tituloPanelPrincipal">Resumo do Salão:</a>
    <div id="tabelaResumoMarcacao">         
        
        <table class="marcacaoTable">
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
            <!-- DADOS -->
            <tbody>
                @foreach ($marcacoes as $marcacao)
                <tr>
                    <td>{{$marcacao['cliente']}}</td>
                    <td>{{$marcacao['telefone']}}</td>
                    <td>{{$marcacao['servico']}}</td>
                    <td>{{$marcacao['horario']}}</td>
                    <td>{{$marcacao['dia']}}</td>
                    <td>{{$marcacao['funcionario']}}</td>
                </tr>	
                @endforeach	 
            </tbody>
            <!-- DADOS [FIM] -->
        </table>
        
    </div>
    <a id="valorCaixa">Valor total em caixa: R$320,00</a>
    <button class="botaoFecharCaixa botao_cor ">Fechar o dia</button>
</div>

@endsection
