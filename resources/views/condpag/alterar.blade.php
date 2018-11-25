@extends('layout.principal')
@section('conteudo')
<a href="{{action('CondpagController@lista')}}">
    <button type="submit" class="btn btn-success">Voltar para Listagem</button>
</a> 
    <h1>Alterar Condição de Pagamento: {{ $c->descricao }}</h1>

    <form action="/condpags/altera" method="post">
        <input type="hidden" name="id" value="{{$c->id}}" />
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Descrição</label>
            <input name="descricao" class="form-control" value="{{$c->descricao}}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Alterar</button>
    </form>

@stop