@extends('template')

@section('conteudo_principal')


<h3 id="tituloPanelPrincipal">Histórico de Vendas:</h3>
<div class="tabela-visualizacao">              
    <table class="padraoTable">
        <thead>
            <tr>
                <th>Código</th>
                <th>Quantidade</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço Unitario</th>
                <th>Subtotal</th>
                <th>Hora</th>
                <th>Data</th>
                <th id="coluna-acao">Ações</th>
            </tr>
        </thead>
        <!-- DADOS -->
        <tbody>
            <tr>
                <td>P1</td>
                <td>5</td>
                <td>3 Min Milagrosos Condicionador Diarío</td>
                <td>produto</td>
                <td>18,99</td>
                <td>94,95</td>
                <td>19:20</td>
                <td>05/06/2019</td>
                <td align="center">
                    <button type="button" class="btn btn-default">Excluir</button>
                </td>
            </tr>
            <tr>
                <td>S1</td>
                <td>1</td>
                <td>raspar cabelo</td>
                <td>serviço</td>
                <td>29,99</td>
                <td>29,99</td>
                <td>16:20</td>
                <td>11/06/2019</td>
                <td align="center">
                    <button type="button" class="btn btn-default">Excluir</button>
                </td>
            </tr>		
        </tbody> 
        <!-- DADOS [FIM] -->
    </table>
</div>


@endsection
