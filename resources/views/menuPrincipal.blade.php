@extends('template')

@section('conteudo_principal')

<h3 id="tituloPanelPrincipal">Bem-vindo {{session('funcNome')}}, resumo do Salão:</h3>
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
            </tr>	
            @endforeach	 
        </tbody>
    </table>

</div>
<h3 id="valorCaixa">Valor total em caixa: R$320,00</h3>
<button type="button" onclick="window.location.href='{{route('caixa.vendas')}}'" class="botaoFecharCaixa botao_cor">Fechar o dia</button>
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
