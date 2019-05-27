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
        
        <label  onclick="window.location.href='{{route('principal')}}'" id="textocabecalho">Mozart Hairs Style</label>
        <div class="dropdown">
            <button class="dropbtn">Marcação</button>
            <div class="dropdown-content">
                <a href="{{route('marcacao')}}">Visualizar</a>
                <a href="{{route('marcacao.cadastrar')}}">Cadastrar</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Funcionário</button>
            <div class="dropdown-content">
                <a href="{{route('funcionario')}}">Visualizar</a>
                <a href="{{route('funcionario.cadastrar')}}">Cadastrar</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Serviço</button>
            <div class="dropdown-content">
                <a href="{{route('servico')}}">Visualizar</a>
                <a href="{{route('servico.cadastrar')}}">Cadastrar</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Cliente</button>
            <div class="dropdown-content">
                <a href="{{route('cliente')}}">Visualizar</a>
                <a href="{{route('cliente.cadastrar')}}">Cadastrar</a>
            </div>
        </div>
        
    </header>
    
    <script>
        $(document).ready(function(){
            $('.dropdown').bind('mouseover', function() {
                $('div', this).show();
            });
            
            $('.dropdown').bind('mouseleave', function() {
                $('div', this).hide();
            });
        });
    </script>
    
    <!-- FIM BARRA DE NAVEGAÇÃO -->
    
    <div class="container">
        <div class="panelPrincipal">
            <!-- CONTEUDO PRINCIPAL [INICIO] -->
            @yield('conteudo_principal')
            <!-- CONTEUDO PRINCIPAL [FIM] -->
        </div>
    </div>
    <br/>
</body>
</html>