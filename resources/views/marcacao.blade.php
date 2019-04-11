<html>
<head>
    <title>Carlos Hairs Style - Menu</title>
    <meta charset="utf-8"/>
    
    <link rel="stylesheet" href="styleMarcacao.css">
    
    <style>
        body{
            background-image:url(https://us.123rf.com/450wm/lux100/lux1001607/lux100160700114/60055497-personal-care-seamless-pattern-on-white-background-wallpaper-with-hygiene-and-hair-salon-elements.jpg?ver=6) ;
        }
    </style>
    <script type="text/javascript">
        function redirecionarPagina(){
            window.location = "menuPrincipal.html"
        }
    </script>
    
</head>

<body onLoad="setTimeout('redirecionarPagina()', 15000)">
    <header id="cabecalho">
        <a href="menuPrincipal.html" id="textoCabecalho" onclick="">Carlos Hairs Style</a>
    </header>
    <div id="menuSuperior">
        <ul > 
            <li class="itemMenuSuperior">
                <a class="textoMenuSuperior" href="marcacao.html">Marcações</a>
            </li>
            <li class="itemMenuSuperior">
                <a class="textoMenuSuperior" href="#">Funcionários</a>
            </li>
            <li class="itemMenuSuperior">
                <a class="textoMenuSuperior" href="#">Clientes</a>
            </li>
            <li class="itemMenuSuperior">
                <a class="textoMenuSuperior" href="#">Serviços</a>
            </li>
            
            <li class="itemMenuSuperior">
                <a class="textoMenuSuperior" href="#">Caixa</a>
            </li>
            <li class="itemMenuSuperior">
                <a class="textoMenuSuperior" href="#">Estoque</a>
            </li>
        </ul>
    </div>
    <div id="panelPrincipal">
        <div>
            <a id="tituloMarcacao">Marcações:</a>
        </div>
        <div>
            <button id="botaoCrudMarcacao">Adicionar Marcação</button>
        </div>
        <div id="tabelaResumoMarcacao">         
            <table class="marcacaoTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Telefone</th>
                        <th>Serviço</th>
                        <th>Horario</th>
                        <th>Dia</th>
                        <th>Funcionario</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td><td>Carlos</td><td>99999-9999</td><td>Pintar Cabelo</td><td>15:30</td><td>07/03/2019</td><td>Vinicius</td><td>*AÇÕES*</td></tr>
                        <tr>
                            <td>2</td><td>Mozart</td><td>98877-6655</td><td>Aparar o Cabelo</td><td>19:15</td><td>15/03/2019</td><td>Maria</td><td>*AÇÕES*</td></tr>
                        </tbody>
                    </tr>
                </table>
            </div>
        </div>
        <footer id="rodape">
            <label id="textoRodape">|| Salão de Beleza Carlos Hairs Style || Endereço: Avenida Lurdes Vasconselos 2424 || Email: contato@carloshair.com || Telefones: 98733-2347 ou 99106-3220 ||</label>
        </footer>
    </body>
    </html>
    