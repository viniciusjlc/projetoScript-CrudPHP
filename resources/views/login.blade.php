<html>
<head>
    <title>Mozart Hairs Style  - Login</title>
    <meta charset="utf-8"/>
    
    <link rel="stylesheet" href="{{url('assets\css\styleLogin.css')}}">
    <link rel="stylesheet" href="{{url('assets\css\styleGeral.css')}}">
    
    
</head>

<body>
    <div id="grid_login">
        <h1>Mozart Hairs Style</h1>
        <h2>LOGIN</h2>
        <div id="panel_dadosLogin">
            <form action="{{route('login.logar')}}" method="POST">
                @csrf
                <div id="campos_login">
                    <label>E-mail: </label>
                    <br/>
                    <input type="email" name="email" id="campo-email"/>
                    <br/>
                    <label>Senha: </label>
                    <br/>
                    <input type="password" name="senha" id="campo-senha"/>
                    <div>   
                        <button type="submit" class="botao_cor botao_login">Logar</button>
                        
                        @if(!empty(session('erro')))
                        <!-- LOGIN ou SENHA INCORRETA -->
                        <div class="alerta_senhaLogin">
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
        <label id="textoRodape">|| Salão de Beleza Mozart Hairs Style || Endereço: Avenida Lurdes Vasconselos 2424 || Email: contato@carloshair.com || Telefones: 98733-2347 ou 99106-3220 ||</label>
    </footer>
</body>
</html>
