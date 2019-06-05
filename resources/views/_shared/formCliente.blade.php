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
    <input type="text" maxlength="100" name="nome" value="{{old('nome', $cliente->nome)}}" id="campo-nome" class="form-cadastro-inputText" >
</div>

<div class="form-group">
    <label for="campo-idade">CPF:</label>
    <input type="text"  maxlength="11" class="form-cadastro-inputText cpf" value="{{old('cpf', $cliente->cpf)}}" name="cpf" id="campo-cpf">
</div>

<div class="form-group">
    <label for="campo-email">Email:</label>
    <input type="email" maxlength="60" class="form-cadastro-inputText" value="{{old('email', $cliente->email)}}" name="email" id="campo-email">
</div>

<div class="form-group">
    <label for="campo-telefone">Telefone:</label>
    <input type="text" maxlength="9" class="form-cadastro-inputText" value="{{old('telefone', $cliente->telefone)}}" name="telefone" id="campo-telefone">
</div>

<div class="form-group">
    <label for="campo-sexo">Sexo:</label>
    <br>
    <select class="form-cadastro-inputSelectMenu" name="sexo" id="campo-sexo">
        <option value="M" @if(old('sexo', $cliente->sexo) == 'M')  selected @endif >Masculino</option>
        <option value="F" @if(old('sexo', $cliente->sexo) == 'F')  selected @endif >Feminino</option>
    </select>
</div>

<div class="form-group">
    <label for="campo-idade">Idade:</label>
    <input type="number" class="form-cadastro-inputText" value="{{old('idade', $cliente->idade)}}" name="idade" id="campo-idade">
</div>

<div class="form-group">
    <label for="campo-endereco">Endereço:</label>
    <input type="text" maxlength="100" class="form-cadastro-inputText" value="{{old('endereco', $cliente->endereco)}}" name="endereco" id="campo-endereco">
</div>

<div class="form-group">
    <label for="campo-padraoCabelo">Padrão Cabelo:</label>
    <input type="text" maxlength="200" class="form-cadastro-inputText" value="{{old('padraoCabelo', $cliente->padraoCabelo)}}" name="padraoCabelo" id="campo-padraoCabelo">
</div>

<div class="form-group">
    <label for="campo-padraoVisual">Padrão Visual:</label>
    <input type="text" maxlength="200" class="form-cadastro-inputText" value="{{old('padraoVisual', $cliente->padraoVisual)}}" name="padraoVisual" id="campo-padraoVisual">
</div>


@push('javascript')
    <script src="{{asset('assets/js/jquery.mask.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.phone').mask('00000-0000');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            alert('teste');
        });
    </script>
    
@endpush