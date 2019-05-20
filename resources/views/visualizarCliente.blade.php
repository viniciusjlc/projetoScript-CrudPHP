@extends('template')

@section('conteudo_principal')

@if (session('msg'))
<div class="alert alert-success">
    <ul>
        <li>{{session('msg')}}</li>
    </ul>
</div>
@endif
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
                <th id="coluna-acao">Ações</th>
            </tr>
        </thead>
        <!-- DADOS -->
        <tbody>
            @foreach ($listaCliente as $clt)
            <tr>
                <td>{{$clt->nome}}</td>
                <td>{{$clt->cpf}}</td>
                <td>{{$clt->email}}</td>
                <td>{{$clt->telefone}}</td>
                <td>{{$clt->sexo}}</td>
                <td>{{$clt->idade}}</td>
                <td>{{$clt->endereco}}</td>
                <td>{{$clt->padraoCabelo}}</td>
                <td>{{$clt->padraoVisual}}</td>
                <td>
                    <button type="button" onclick="window.location.href='{{route('cliente.alterar', ['id'=>$clt->id])}}'" class="btn btn-default">Alterar</button>
                    <button type="button" onclick="window.location.href='{{route('cliente.excluir', ['id'=>$clt->id])}}'" class="btn btn-default">Excluir</button>
                </td>
                
            </tr>	
            @endforeach	 
        </tbody> 
        <!-- DADOS [FIM] -->
    </table>
</div>
@endsection