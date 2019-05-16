@extends('template')

@section('conteudo_principal')

<h3 id="tituloPanelPrincipal">Serviço:</h3>
<div class="tabela-visualizacao">                  
        <table class="padraoTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Comissão</th>
                    <th>Preco</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <!-- DADOS -->
            <tbody>
                @foreach ($listaServico as $serv)
                <tr>
                    <td>{{$serv->nome}}</td>
                    <td>{{$serv->categoria->descricao}}</td>
                    <td>{{$serv->comissao}}</td>
                    <td>{{$serv->preco}}</td>
                    <td>{{$serv->descricao}}</td>
                    <td><button type="submit" class="btn btn-default">Excluir</button></td>
                </tr>	
                @endforeach	 
            </tbody> 
            <!-- DADOS [FIM] -->
        </table>
    </div>


@endsection
