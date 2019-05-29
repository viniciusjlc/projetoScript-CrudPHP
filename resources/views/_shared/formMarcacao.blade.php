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
<div class="form-group">
    <label for="campo-servico">Serviço:</label>
    <br>
    <select class="form-cadastro-inputSelectMenu" name="codServico" id="campo-servico">
        @foreach($listaServico as $ser)    
        <option value="{{$ser->id}}" {{old('codServico', $marcacao->codServico) == $ser->id ? 'selected' : ''}} > {{ $ser->nome }} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="campo-funcionario">Funcionário:</label>
    <br>
    <select class="form-cadastro-inputSelectMenu" name="codFuncionario" id="campo-funcionario">
        @foreach($listaFuncionario as $func)    
        <option value="{{$func->id}}" {{old('codFuncionario', $marcacao->codFuncionario) == $func->id ? 'selected' : ''}} > {{ $func->nome }} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="campo-cliente">Cliente:</label>
    <br>
    <select class="form-cadastro-inputSelectMenu" name="codCliente" id="campo-cliente">
        @foreach($listaCliente as $cliente)    
        <option value="{{$cliente->id}}" {{old('codCliente', $marcacao->codCliente) == $cliente->id ? 'selected' : ''}} > {{ $cliente->nome }} </option>
        @endforeach
    </select>
</div>

<div class="class">
    <label for="campo-data">Data:</label>
    <br>
    <input type="date" name="data" value="{{old('data', $marcacao->data)}}" id="campo-data" class="form-cadastro" >
</div>

<div class="class">
    <label for="campo-horario">Horario:</label>
    <br>
    <input type="time" name="horario" value="{{old('horario', $marcacao->horario)}}" id="campo-horario" class="form-cadastro" >
</div>
<br>


<script>
    $('#campo-servico').change(()=>{
        $.get('{{marcacao.funcionario}}/'+$(this).val(), (retornoFuncionario)=>{
            $('#campo-funcionario').html('');
            retornoFuncionario.forEach(element => {
                $('#campo-funcionario').append('<option value="'+element.id+'" >'+element.nome+'</option>')
            });
        })
    })  
</script>