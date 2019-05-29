<html>
<head>
    <title>Hairs Style  - Login</title>
    <meta charset="utf-8"/>
    
    <link rel="stylesheet" href="{{url('assets\css\styleGeral.css')}}">
    
    
</head>

<body>
    
    <div class="container">
        <h1 id="titulo_login">Hairs Style</h1>
        <div id="grid_login">
            <h2>Login</h2>
            <div id="panel_dadosLogin">
                <form action="{{route('login.logar')}}" method="POST">
                    @csrf
                    <div id="campos_login">
                        <br/>
                        <input type="login" placeholder="Login" name="login" id="campo-login"/>
                        <br/>
                        <br/>
                        <input type="password" placeholder="Senha"  name="senha" id="campo-senha"/>
                        @if(!empty(session('erro')))
                        <div class="alerta_senhaLogin">
                            <strong> {{session('erro')}} </strong>
                        </div>
                        @endif
                        <div>   
                            <button type="submit" class="botao_cor botao_login">Logar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
