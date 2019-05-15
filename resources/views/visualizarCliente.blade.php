@extends('template')

@section('conteudo_principal')


<h3 id="tituloPanelPrincipal">Clientes:</h3>
<div class="tabela-visualizacao">                  
    <table class="marcacaoTable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Idade</th>
            </tr>
        </thead>
        <!-- DADOS -->
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente['nome']}}</td>
                <td>{{$cliente['email']}}</td>
                <td>{{$cliente['telefone']}}</td>
                <td>{{$cliente['sexo']}}</td>
                <td>{{$cliente['idade']}}</td>
            </tr>	
            @endforeach	 
        </tbody>
        <!-- DADOS [FIM] -->
    </table>
</div>




@endsection
