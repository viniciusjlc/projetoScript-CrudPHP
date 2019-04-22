<html>
<head>
    <title>Mozart Hairs Style - Menu</title>
    <meta charset="utf-8"/>
    
    <link rel="stylesheet" href="{{url('assets\css\styleMenuPrincipal.css')}}">
    <link rel="stylesheet" href="{{url('assets\css\styleGeral.css')}}">
    
</head>

<body>
    <header id="cabecalho">
        <label id="textoCabecalho">Mozart Hairs Style</label>
    </header>
    <div id="menuSuperior">
        <div class="dropdown">
            <button class="dropbtn">Cliente</button>
            <div class="dropdown-content">
                <a href="{{route('cliente.cadastrar')}}">Cadastrar</a>
            </div>
        </div>
    </div>
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
    <footer id="rodape">
        <label id="textoRodape">|| Salão de Beleza Mozart Hairs Style || Endereço: Avenida Lurdes Vasconselos 2424 || Email: contato@carloshair.com || Telefones: 98733-2347 ou 99106-3220 ||</label>
    </footer>
</body>
</html>
