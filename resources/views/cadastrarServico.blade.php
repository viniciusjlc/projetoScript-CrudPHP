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
<h3 id="tituloPanelPrincipal">Cadastrar Serviço:</h3>
<div id="form-cadastro">
    <form action="{{route('funcionario.novo')}}" method="get">
        @csrf      
        <div class="class">
            <label for="campo-nome">Nome:</label>
            <input type="text" maxlength="100" name="nome" value="{{old('nome')}}" id="campo-nome" class="form-cadastro-inputText" >
        </div>
        
        <div class="form-group">
            <label for="campo-sexo">CATEGORIA:</label>
            <br>
            <select class="form-cadastro-inputSelectMenu" name="sexo" id="campo-sexo">
                <option value="M">masculino</option>
                <option value="F">feminino</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="campo-preco">Preço:</label>
            <input type="number" class="form-cadastro-inputText" value="{{old('preco')}}" name="preco" id="campo-preco">
        </div>

        <div class="form-group">
                <label for="campo-comissao">Comissão:</label>
                <input type="number" class="form-cadastro-inputText" value="{{old('comissao')}}" name="comissao" id="campo-comissao">
            </div>
        
        <div class="form-group">
            <label for="campo-descricao">Descrição:</label>
            <input type="text" maxlength="120" class="form-cadastro-inputText" value="{{old('descricao')}}" name="descricao" id="campo-descricao">
        </div>
        
        <button type="submit" class="btn btn-default">Cadastrar</button>	
        <br clear="both"/>
    </form>
</div>	
@endsection