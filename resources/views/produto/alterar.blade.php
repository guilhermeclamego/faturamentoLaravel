@extends('layout.principal')
@section('conteudo')
<a href="{{action('ProdutoController@lista')}}">
    <button type="submit" class="btn btn-success">Voltar para Listagem</button>
</a> 

    <h1>Alterar Produto: {{ $p->descricao }}</h1>

    <form action="/produtos/altera" method="post">
        <input type="hidden" name="id" value="{{$p->id}}" />
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Descrição</label>
            <input name="descricao" class="form-control" value="{{$p->descricao}}">
        </div>
        <div class="form-group">
            <label>Valor Custo</label>
            <input name="valor_custo" class="form-control" value="{{$p->valor_custo}}">
        </div>
        <div class="form-group">
            <label>Valor Venda</label>
            <input name="valor_venda" type="number" class="form-control" value="{{$p->valor_venda}}">
        </div>
        <div class="form-group">
            <label>Estoque</label>
            <input name="estoque" type="number" class="form-control" value="{{$p->estoque}}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Alterar</button>
    </form>

@stop