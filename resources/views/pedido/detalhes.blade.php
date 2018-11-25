@extends('layout.principal')
@section('conteudo')
<a href="{{action('PedidoController@lista')}}">
    <button type="submit" class="btn btn-success">Voltar para Listagem</button>
</a> 
<h1>Detalhes do Pedido: {{ $p->id }}</h1>
<ul>    
    <li>
        <b>ID: </b> {{ $p->id }}
    </li>
    <li>
        <b>Pessoa ID: </b> {{ $p->pessoa_id }}
    </li>
    <li>
        <b>Condição de Pagamento ID: </b> {{ $p->condpag_id }}
    </li>
    <li>
        <b>Produto ID: </b> {{ $p->produto_id }}
    </li>
    <li>
        <b>Observação: </b> {{ $p->observacao }}
    </li>
</ul>

@stop