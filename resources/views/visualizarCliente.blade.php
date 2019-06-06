@extends('template')

@section('conteudo_principal')


<h3 id="tituloPanelPrincipal">Clientes:</h3>
@if (session('msg'))
<div class="alert alert-success">
    <ul>
        <li>{{session('msg')}}</li>
    </ul>
</div>
@endif
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
                <td class="cpf">{{$clt->cpf}}</td>
                <td>{{$clt->email}}</td>
                <td class="phone">{{$clt->telefone}}</td>
                <td>{{$clt->sexo}}</td>
                <td>{{$clt->idade}}</td>
                <td>{{$clt->endereco}}</td>
                <td>{{$clt->padraoCabelo}}</td>
                <td>{{$clt->padraoVisual}}</td>
                <td align="center">      
                    <button type="button" onclick="window.location.href='{{route('cliente.alterar', ['id'=>$clt->id])}}'" class="btn btn-default">Alterar</button>
                    <button type="button" onclick="window.location.href='{{route('cliente.excluir', ['id'=>$clt->id])}}'" class="btn btn-default">Excluir</button>
                </td>
                
            </tr>	
            @endforeach	 
        </tbody> 
        <!-- DADOS [FIM] -->
    </table>
</div>


@push('javascript')
<script src="{{asset('assets/js/jquery.mask.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00');
        $('.phone').mask('00000-0000');
        $('.cpf').mask('000.000.000-00', {reverse: true});
    });
</script>

@endpush
@endsection