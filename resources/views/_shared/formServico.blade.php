@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@csrf      
<div class="class">
    <label for="campo-nome">Nome:</label>
    <input type="text" maxlength="100" name="nome" value="{{old('nome', $servico->nome)}}" id="campo-nome" class="form-cadastro-inputText" >
</div>

<div class="form-group">
    <label for="campo-categoria">Categoria:</label>
    <select class="form-cadastro-inputSelectMenu" name="codCategoria" id="campo-categoria" value="{{old('codCategoria', $servico->codCategoria)}}">
        @foreach ($listaCategoria as $cat)
        <option value="{{$cat->id}}">{{$cat->descricao}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="campo-preco">Preço:</label>
    <input type="number" class="form-cadastro-inputText" value="{{old('preco', $servico->preco)}}" name="preco" id="campo-preco">
</div>

<div class="form-group">
    <label for="campo-comissao">Comissão:</label>
    <input type="number" class="form-cadastro-inputText" value="{{old('comissao', $servico->comissao)}}" name="comissao" id="campo-comissao">
</div>

<div class="form-group">
    <label for="campo-descricao">Descrição:</label>
    <input type="text" maxlength="120" class="form-cadastro-inputText" value="{{old('descricao', $servico->descricao)}}" name="descricao" id="campo-descricao">
</div>