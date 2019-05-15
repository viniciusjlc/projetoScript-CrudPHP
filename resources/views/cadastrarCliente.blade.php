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
<h3 id="tituloPanelPrincipal">Cadastrar Cliente</h3>
<div id="form-cadastro">
    <form action="{{route('cliente.novo')}}" method="get">
        @csrf      
        <div class="class">
            <label for="campo-nome">Nome:</label>
            <input type="text" maxlength="100" name="nome" value="{{old('nome')}}" id="campo-nome" class="form-cadastro-inputText" >
        </div>
        
        <div class="form-group">
            <label for="campo-idade">CPF:</label>
            <input type="text"  maxlength="11" class="form-cadastro-inputText" value="{{old('cpf')}}" name="cpf" id="campo-cpf">
        </div>
        
        <div class="form-group">
            <label for="campo-email">Email:</label>
            <input type="email" maxlength="60" class="form-cadastro-inputText" value="{{old('email')}}" name="email" id="campo-email">
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
            <label for="campo-descCabelo">Descrição Cabelo:</label>
            <input type="text" maxlength="200" class="form-cadastro-inputText" value="{{old('descCabelo')}}" name="descCabelo" id="campo-descCabelo">
        </div>
        
        <div class="form-group">
            <label for="campo-descVisual">Visual Cabelo:</label>
            <input type="text" maxlength="200" class="form-cadastro-inputText" value="{{old('descVisual')}}" name="descVisual" id="campo-descVisual">
        </div>
        
        <div class="form-group">
            <label for="campo-padraoCabelo">Padrão Cabelo:</label>
            <input type="text" maxlength="200" class="form-cadastro-inputText" value="{{old('padraoCabelo')}}" name="padraoCabelo" id="campo-padraoCabelo">
        </div>
        
        <div class="form-group">
            <label for="campo-padraoVisual">Padrão Cabelo:</label>
            <input type="text" maxlength="200" class="form-cadastro-inputText" value="{{old('padraoVisual')}}" name="padraoVisual" id="campo-padraoVisual">
        </div>
        
        <button type="submit" class="btn btn-default">Cadastrar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection