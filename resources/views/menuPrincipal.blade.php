@extends('template')

@section('conteudo_principal')

    <h3 id="tituloPanelPrincipal">Resumo do Salão:</h3>
    <div class="tabela-visualizacao">         
        
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
    <h3 id="valorCaixa">Valor total em caixa: R$320,00</h3>
    <button class="botaoFecharCaixa botao_cor ">Fechar o dia</button>


@endsection
