<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hair Style</title>
    
    <link rel="stylesheet" href="{{url('assets\css\styleGeral.css')}}">
</head>
<body>
    <!-- BARRA DE NAVEGAÇÃO -->
    <header id="cabecalho">
        <label id="textoCabecalho">Mozart Hairs Style</label>
    </header>
    <div id="menuSuperior">
        <div class="dropdown">
            <button class="dropbtn">Cliente</button>
            <div class="dropdown-content">
                <a href="#">Cadastrar</a>
            </div>
        </div>
    </div>
    <!-- FIM BARRA DE NAVEGAÇÃO -->
    
    <div class="container">
        <!-- CONTEUDO PRINCIPAL [INICIO] -->
        @yield('conteudo_principal')
        <!-- CONTEUDO PRINCIPAL [FIM] -->
    </div>
    
    <footer id="rodape">
        <label id="textoRodape">|| Salão de Beleza Mozart Hairs Style || Endereço: Avenida Lurdes Vasconselos 2424 || Email: contato@carloshair.com || Telefones: 98733-2347 ou 99106-3220 ||</label>
    </footer>
    <br/>
</body>
</html>