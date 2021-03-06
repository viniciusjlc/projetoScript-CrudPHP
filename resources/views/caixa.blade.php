@extends('template')

@section('conteudo_principal')


<h3 id="tituloPanelPrincipal">Caixa:</h3>
<div class="tabela-visualizacao" style="columns: 2">
    <table class="padraoTable">
        <thead>
            <tr>
                <th>Código Local</th>
                <th>Quantidade</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço Unitario</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>5</td>
                <td>Condicionador</td>
                <td>produto</td>
                <td>15</td>
                <td>75</td>
            </tr>
            <tr>
                <td>A</td>
                <td>1</td>
                <td>Tratamento Capilar</td>
                <td>serviço</td>
                <td>45</td>
                <td>45</td>
            </tr>
        </tbody> 
    </table>
    <div style="width: 95% columns: 2">
        <button class="dropbtn botao-caixa">Adicionar Produto</button>
        <button class="dropbtn botao-caixa">Cancelar Produto</button>
        <button class="dropbtn botao-caixa">Verficar Preço</button>
        <button class="dropbtn botao-caixa">Alterar Qnt. Produto</button>
    </div>
</div>
<div id="conteudo-caixa">
    <label>Subtotal Produtos: 75,00</label>
    <br>
    <label>Subtotal Serviços: 45,00</label>
    <br>
    <label>Total a Pagar: 120,00</label>
    <br>
</div>
<button class="dropbtn">Finalizar Compra</button>
@endsection
