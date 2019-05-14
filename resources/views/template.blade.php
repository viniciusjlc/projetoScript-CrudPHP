<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hair Style</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('assets\css\styleGeral.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- BARRA DE NAVEGAÇÃO -->
    <header id="cabecalho">
        {{-- <div class="dropdown-menu"> --}}
        <label  onclick="window.location.href='{{route('principal')}}'" id="textocabecalho">Mozart Hairs Style</label>
        <div class="dropdown">
            <button class="dropbtn">Cliente</button>
            <div class="dropdown-content">
                <a href="{{route('cliente')}}">Visualizar</a>
                <a href="{{route('cliente.cadastrar')}}">Cadastrar</a>
            </div>
        </div>
        {{-- </div> --}}
    </header>

    <script>
        $('.dropdown-menu').on('mouseover', () => {
            console.log('teste');
            //child
            //toggle
        });
    </script>


    <!-- FIM BARRA DE NAVEGAÇÃO -->
    
    <div class="container">
        <!-- CONTEUDO PRINCIPAL [INICIO] -->
        @yield('conteudo_principal')
        <!-- CONTEUDO PRINCIPAL [FIM] -->
    </div>
    
    <footer id="rodape">
        <label id="textoRodape">|| Salão de Beleza Mozart Hairs Style || Endereço: Avenida Lurdes Vasconselos 2424 || Email: contato@mozarthair.com || Telefones: 98733-2347 ou 99106-3220 ||</label>
    </footer>
    <br/>
</body>
</html>