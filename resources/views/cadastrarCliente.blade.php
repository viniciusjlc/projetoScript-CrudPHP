@extends('template')

@section('conteudo_principal')
<div id="panelPrincipal">
    <a id="tituloPanelPrincipal">Cadastrar Cliente</a>
    <form action="" method="post">
        <div id="campos-cadastroCliente">
            
            <div class="class">
                <label for="campo-nome">Nome:</label>
                <input type="text" name="nome" id="campo-nome" class="cadastroCliente-inputText" >
            </div>
            
            <div class="form-group">
                <label for="campo-email">Email:</label>
                <input type="email" class="cadastroCliente-inputText" name="email" id="campo-email">
            </div>
            
            <div class="form-group">
                <label for="campo-telefone">Telefone:</label>
                <input type="text" class="cadastroCliente-inputText" name="telefone" id="campo-telefone">
            </div>
            
            <div class="form-group">
                <label for="campo-sexo">Sexo:</label>
                <select class="cadastroCliente-inputSelectMenu" name="sexo" id="campo-sexo">
                    <option value="1">masculino</option>
                    <option value="2">feminino</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="campo-idade">Idade:</label>
                <input type="number" class="cadastroCliente-inputText" name="idade" id="campo-idade">
            </div>
            
            <button type="submit" class="btn btn-default">Cadastrar</button>	
        </div>			
    </form>
    
</div>
@endsection