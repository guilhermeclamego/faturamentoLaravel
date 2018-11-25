@extends('layout.principal')
@section('conteudo')

<a href="{{action('ProdutoController@lista')}}">
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

<h1>Novo Produto</h1>

<form action="/produtos/adiciona" method="post"> 

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <div class="form-group">
        <label>Desrição</label>        
        <input name="descricao" class="form-control"
            value="{{ old('descricao') }}">
    </div>    
    <div class="form-group">
        <label>Valor Custo</label>        
        <input name="valor_custo" class="form-control"
            value="{{ old('valor_custo') }}">
    </div> 
    <div class="form-group">
        <label>Valor Venda</label>        
        <input name="valor_venda" class="form-control"
            value="{{ old('valor_venda') }}">
    </div> 
    <div class="form-group">
        <label>Estoque</label>        
        <input name="estoque" type="number" class="form-control"
            value="{{ old('estoque') }}">
    </div>  
    <button type="submit" class="btn btn-primary btn-block">Adicionar</button>        
</form>

@stop