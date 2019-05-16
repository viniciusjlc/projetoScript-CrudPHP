@extends('template')

@section('conteudo_principal')


<h3 id="tituloPanelPrincipal">Clientes:</h3>
<div class="tabela-visualizacao">                  
    <table class="padraoTable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Idade</th>
                <th>Endereço</th>
                <th>Padrão de Cabelo</th>
                <th>Padrão de Visual</th>
            </tr>
        </thead>
        <!-- DADOS -->
        {{-- <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente['nome']}}</td>
                <td>{{$cliente['email']}}</td>
                <td>{{$cliente['telefone']}}</td>
                <td>{{$cliente['sexo']}}</td>
                <td>{{$cliente['idade']}}</td>
            </tr>	
            @endforeach	 
        </tbody> --}}
        <!-- DADOS [FIM] -->
    </table>
</div>




@endsection
