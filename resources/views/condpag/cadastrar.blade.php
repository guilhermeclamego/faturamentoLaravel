@extends('layout.principal')
@section('conteudo')
<a href="{{action('CondpagController@lista')}}">
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

<h1>Nova Condição de Pagamento</h1>

<form action="/condpags/adiciona" method="post"> 

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <div class="form-group">
        <label>Desrição</label>        
        <input name="descricao" class="form-control"
            value="{{ old('descricao') }}">
    </div>    
    <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
</form>

@stop