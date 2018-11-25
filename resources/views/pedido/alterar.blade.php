@extends('layout.principal')
@section('conteudo')
<a href="{{action('PedidoController@lista')}}">
    <button type="submit" class="btn btn-success">Voltar para Listagem</button>
</a> 

    <h1>Alterar Pedido: {{ $p->ID }}</h1>

    <form action="/pedidos/altera" method="post">
        <input type="hidden" name="id" value="{{$p->id}}" />
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Pessoa ID</label>
            <input name="pessoa_id" class="form-control" value="{{$p->pessoa_id}}">
        </div>
        <div class="form-group">
            <label>Condição de Pagamento ID</label>
            <input name="condpag_id" class="form-control" value="{{$p->condpag_id}}">
        </div>
        <div class="form-group">
            <label>Produto ID</label>
            <input name="produto_id" class="form-control" value="{{$p->produto_id}}">
        </div>
        <div class="form-group">
            <label>Observação</label>
            <input name="observacao" class="form-control" value="{{$p->observacao}}">
        </div>                
        <button type="submit" class="btn btn-primary btn-block">Alterar</button>
    </form>

@stop