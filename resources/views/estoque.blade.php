@extends('template')

@section('conteudo_principal')


<h3 id="tituloPanelPrincipal">Estoque:</h3>
<div class="tabela-visualizacao"> 
    <button class="dropbtn adicionar-produto" >Adicionar Produto</button>                 
    <table class="padraoTable">
        <thead>
            <tr>
                <th>Código do Produto</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço Unitario</th>
                <th id="coluna-acao">Ações</th>
            </tr>
        </thead>
        <!-- DADOS -->
        <tbody>
            <tr>
                <td>1A17</td>
                <td>3 Min Milagrosos Condicionador Diarío</td>
                <td>Condicionador reforçado com o poder da ampola, para cabelos fortes e saudáveis. O novo 3 Minutos Milagrosos é um condicionador de uso diário enriquecido com o poder de uma ampola e que pode ser usado depois de cada lavagem.</td>
                <td>18,99</td>
                <td align="center">
                    <button type="button" class="btn btn-default">Alterar</button>
                    <button type="button" class="btn btn-default">Excluir</button>
                </td>
            </tr>	
        </tbody> 
        <!-- DADOS [FIM] -->
    </table>
</div>


@endsection
