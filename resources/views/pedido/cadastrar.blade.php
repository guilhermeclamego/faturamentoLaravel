@extends('layout.principal')
@section('conteudo')

<a href="{{action('PedidoController@lista')}}">
    <button type="submit" class="btn btn-success">Voltar para Listagem</button>
</a>  
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $errors)
                <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Novo Pedido</h1>

<form action="/pedidos/adiciona" method="post"> 

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <div class="form-group">
        <label>Pessoa ID</label>        
        <input name="pessoa_id" class="form-control"
            value="{{ old('pessoa_id') }}">
    </div>    
    <div class="form-group">
        <label>Condição de Pagamento ID</label>        
        <input name="condpag_id" class="form-control"
            value="{{ old('condpag_id') }}">
    </div> 
    <div class="form-group">
        <label>Produto ID</label>        
        <input name="produto_id" class="form-control"
            value="{{ old('produto_id') }}">
    </div> 
    <div class="form-group">
        <label>Observação</label>        
        <input name="observacao" class="form-control"
            value="{{ old('observacao') }}">
    </div>  
    <button type="submit" class="btn btn-primary btn-block">Adicionar</button>        
</form>

@stop