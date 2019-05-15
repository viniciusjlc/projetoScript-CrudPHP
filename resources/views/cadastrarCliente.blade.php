@extends('template')


@section('conteudo_principal')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
<div id="panelPrincipal">
    <h3 id="tituloPanelPrincipal">Cadastrar Cliente</h3>
    
    <form action="{{route('cliente.novo')}}" method="get">
        @csrf
        <div id="campos-cadastroCliente">
            
            <div class="class">
                <label for="campo-nome">Nome:</label>
                <input type="text" maxlength="100" name="nome" value="{{old('nome')}}" id="campo-nome" class="cadastroCliente-inputText" >
            </div>
            
            <div class="form-group">
                <label for="campo-idade">CPF:</label>
                <input type="text"  maxlength="11" class="cadastroCliente-inputText" value="{{old('cpf')}}" name="cpf" id="campo-cpf">
            </div>

            <div class="form-group">
                <label for="campo-email">Email:</label>
                <input type="email" maxlength="60" class="cadastroCliente-inputText" value="{{old('email')}}" name="email" id="campo-email">
            </div>
            
            <div class="form-group">
                <label for="campo-telefone">Telefone:</label>
                <input type="text" maxlength="9" class="cadastroCliente-inputText" value="{{old('telefone')}}" name="telefone" id="campo-telefone">
            </div>
            
            <div class="form-group">
                <label for="campo-sexo">Sexo:</label>
                <select class="cadastroCliente-inputSelectMenu" name="sexo" id="campo-sexo">
                    <option value="M">masculino</option>
                    <option value="F">feminino</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="campo-idade">Idade:</label>
                <input type="number" class="cadastroCliente-inputText" value="{{old('idade')}}" name="idade" id="campo-idade">
            </div>
            
            <button type="submit" class="btn btn-default">Cadastrar</button>	
            <br clear="both"/>
        </div>			
    </form>
    
</div>
@endsection