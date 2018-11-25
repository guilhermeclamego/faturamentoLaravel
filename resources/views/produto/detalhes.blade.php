@extends('layout.principal')
@section('conteudo')
<a href="{{action('ProdutoController@lista')}}">
    <button type="submit" class="btn btn-success">Voltar para Listagem</button>
</a> 
<h1>Detalhes do Produto: {{ $p->descricao }}</h1>
<ul>    
    <li>
        <b>Valor Custo: </b> R$ {{ $p->valor_custo }}
    </li>
    <li>
        <b>Valor Venda: </b> R$ {{ $p->valor_venda }}
    </li>
    <li>
        <b>Estoque: </b> {{ $p->estoque or 'Produto sem estoque'}}
    </li>
</ul>

@stop