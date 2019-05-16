@extends('template')

@section('conteudo_principal')
<h3 id="tituloPanelPrincipal">Cadastrar Funcionario</h3>
<div id="form-cadastro">
    <form action="{{route('funcionario.novo')}}" method="get">
        @csrf      
        
        @if(!empty(session('erro')))
        <!-- LOGIN ou SENHA INCORRETA -->
        <div class="alerta_valoresConfirmar">
            <strong>Erro!</strong> {{session('erro')}}
        </div>
        <!-- FIM [LOGIN OU SENHA INCORRETA] -->
        @endif
        
        <div class="class">
            <label for="campo-nome">Nome:</label>
            <input type="text" maxlength="100" name="nome" value="{{old('nome')}}" id="campo-nome" class="form-cadastro-inputText" >
        </div>
        
        <div class="form-group">
            <label for="campo-idade">CPF:</label>
            <input type="text"  maxlength="11" class="form-cadastro-inputText" value="{{old('cpf')}}" name="cpf" id="campo-cpf">
        </div>
        
        <div class="form-group">
            <label for="campo-login">Login:</label>
            <input type="text" maxlength="40" class="form-cadastro-inputText" value="{{old('login')}}" name="login" id="campo-login">
        </div>
        
        <div class="form-group">
            <label for="campo-email">Email:</label>
            <input type="email" maxlength="60" class="form-cadastro-inputText" value="{{old('email')}}" name="email" id="campo-email">
        </div>
        
        <div class="form-group">
            <label for="campo-emailConfirmar">Confirmar Email:</label>
            <input type="email" maxlength="60" class="form-cadastro-inputText" value="{{old('email')}}" name="confirmarEmail" id="campo-emailConfirmar">
        </div>
        
        <div class="form-group">
            <label for="campo-senha">Senha:</label>
            <input type="password" maxlength="40" class="form-cadastro-inputText" name="senha" id="campo-senha">
        </div>     
        
        <div class="form-group">
            <label for="campo-senhaConfirmar">Confimar Senha:</label>
            <input type="password" maxlength="40" class="form-cadastro-inputText" name="confirmarSenha" id="campo-senhaConfirmar">
        </div>
        
        <div class="form-group">
            <label for="campo-telefone">Telefone:</label>
            <input type="text" maxlength="9" class="form-cadastro-inputText" value="{{old('telefone')}}" name="telefone" id="campo-telefone">
        </div>
        
        <div class="form-group">
            <label for="campo-sexo">Sexo:</label>
            <select class="form-cadastro-inputSelectMenu" name="sexo" id="campo-sexo">
                <option value="M">masculino</option>
                <option value="F">feminino</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="campo-idade">Idade:</label>
            <input type="number" class="form-cadastro-inputText" value="{{old('idade')}}" name="idade" id="campo-idade">
        </div>
        
        <div class="form-group">
            <label for="campo-endereco">Endereço:</label>
            <input type="text" maxlength="100" class="form-cadastro-inputText" value="{{old('endereco')}}" name="endereco" id="campo-endereco">
        </div>
        
        <div class="form-group">
            <label for="campo-sexo">CATEGORIA:</label>
            <select class="form-cadastro-inputSelectMenu" name="sexo" id="campo-sexo">
                <option value="M">masculino</option>
                <option value="F">feminino</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-default">Cadastrar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection