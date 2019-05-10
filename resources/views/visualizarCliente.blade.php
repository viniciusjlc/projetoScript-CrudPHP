@extends('template')

@section('conteudo_principal')

<div class="container">
    <div id="panelPrincipal">
        <a id="tituloPanelPrincipal">Clientes:</a>
        <div id="tabelaResumoMarcacao">                  
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

    </div>
    
</div>


@endsection
