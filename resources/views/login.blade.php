<html>
<head>
    <title>Carlos Hairs Style  - Login</title>
    <meta charset="utf-8"/>
    
    <link rel="stylesheet" href="{{url('assets\css\styleLogin.css')}}">
    <link rel="stylesheet" href="{{url('assets\css\styleGeral.css')}}">
    
    
</head>

<body>
    <div id="login">
        <h1>Carlos Hairs Style</h1>
        <h2>LOGIN</h2>
        <div id="dados_principal">
            <form action="{{route('login.logar')}}" method="POST">
                @csrf
                <div id="campos">
                    <label class="textoCampos">E-mail: </label>
                    <br/>
                    <input type="email" class="form-control" name="email" id="campo-email"/>
                    <br/>
                    <label class="textoCampos">Senha: </label>
                    <br/>
                    <input type="password" class="form-control" name="senha" id="campo-senha"/>
                    <div>   
                        <button type="submit" class="botao-cor botao-login">Logar</button>
                        
                        @if(!empty(session('erro')))
                        <!-- LOGIN ou SENHA INCORRETA -->
                        <div class="alerta_senha">
                            <strong>Erro!</strong> {{session('erro')}}
                        </div>
                        <!-- FIM [LOGIN OU SENHA INCORRETA] -->
                        @endif
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer id="rodape">
        <label id="textoRodape">|| Salão de Beleza Carlos Hairs Style || Endereço: Avenida Lurdes Vasconselos 2424 || Email: contato@carloshair.com || Telefones: 98733-2347 ou 99106-3220 ||</label>
    </footer>
</body>
</html>
