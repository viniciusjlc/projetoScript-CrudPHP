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
    <input type="text" maxlength="100" name="nome" value="{{old('nome', $funcionario->nome)}}" id="campo-nome" class="form-cadastro-inputText" >
</div>

<div class="form-group">
    <label for="campo-idade">CPF:</label>
    <input type="text"  maxlength="11" class="form-cadastro-inputText" value="{{old('cpf', $funcionario->cpf)}}" name="cpf" id="campo-cpf">
</div>

<div class="form-group">
    <label for="campo-login">Login:</label>
    <input type="text" maxlength="40" class="form-cadastro-inputText" value="{{old('login', $funcionario->login)}}" name="login" id="campo-login">
</div>

<div class="form-group">
    <label for="campo-email">Email:</label>
    <input type="email" maxlength="60" class="form-cadastro-inputText" value="{{old('email', $funcionario->email)}}" name="email" id="campo-email">
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
    <input type="text" maxlength="9" class="form-cadastro-inputText" value="{{old('telefone', $funcionario->telefone)}}" name="telefone" id="campo-telefone">
</div>

<div class="form-group">
    <label for="campo-sexo">Sexo:</label>
    <br>
    <select class="form-cadastro-inputSelectMenu" name="sexo" id="campo-sexo">
        <option value="M" @if(old('sexo', $funcionario->sexo) == 'M')  selected @endif >Masculino</option>
        <option value="F" @if(old('sexo', $funcionario->sexo) == 'F')  selected @endif >Feminino</option>
    </select>
</div>

<div class="form-group">
    <label for="campo-idade">Idade:</label>
    <input type="number" class="form-cadastro-inputText" value="{{old('idade', $funcionario->idade)}}" name="idade" id="campo-idade">
</div>

<div class="form-group">
    <label for="campo-endereco">Endereço:</label>
    <input type="text" maxlength="100" class="form-cadastro-inputText" value="{{old('endereco', $funcionario->endereco)}}" name="endereco" id="campo-endereco">
</div>

<div class="form-group">
    <label for="campo-categoria">Categoria:</label>
    <br>
    <select class="form-cadastro-inputSelectMenu" name="codCategoria" value="{{old('codCategoria', $funcionario->codCategoria)}}" id="campo-categoria">
        @foreach($listaCategoria as $cat)    
        <option value="{{$cat->id}}" {{old('codCategoria', $funcionario->codCategoria) == $cat->id ? 'selected' : ''}} > {{ $cat->descricao }} </option>
        @endforeach
    </select>
</div>