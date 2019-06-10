@extends('template')

@section('conteudo_principal')


<h3 id="tituloPanelPrincipal">Marcação:</h3>
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
                <th>Cliente</th>
                <th>Telefone</th>
                <th>Serviço</th>
                <th>Data</th>
                <th>Horario</th>
                <th>Funcionario</th>
                <th>Status</th>
                <th id="coluna-acao">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listaMarcacao as $marcacao)
            <tr>
                <td>{{$marcacao->cliente->nome}}</td>
                <td class="phone">{{$marcacao->cliente->telefone}}</td>
                <td>{{$marcacao->servico->nome}}</td>
                <td align="center">{{date('d/m/Y', strtotime($marcacao['data']))}}</td>
                <td align="center">{{$marcacao['horario']}}</td>
                <td>{{$marcacao->funcionario->nome}}</td>
                <td>{{$marcacao->status}}</td>
                <td align="center"> 
                    <button type="button" onclick="window.location.href='{{route('marcacao.alterar', ['id'=>$marcacao->id])}}'" class="btn btn-default">Alterar</button>
                    <button type="button" onclick="window.location.href='{{route('marcacao.excluir', ['id'=>$marcacao->id])}}'" class="btn btn-default">Excluir</button>
                    <button type="button" class="btn btn-default">Executar</button>
                    <button type="button" class="btn btn-default">Cancelar</button>
                </td>
            </tr>	
            @endforeach	 
        </tbody>
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
