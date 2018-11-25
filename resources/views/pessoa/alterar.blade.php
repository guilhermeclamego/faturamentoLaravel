@extends('layout.principal')
@section('conteudo')
<a href="{{action('PessoaController@lista')}}">
    <button type="submit" class="btn btn-success">Voltar para Listagem</button>
</a> 

    <h1>Alterar Pessoa: {{ $p->nome }}</h1>

    <form action="/pessoas/altera" method="post">
        <input type="hidden" name="id" value="{{$p->id}}" />
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="{{$p->nome}}">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input name="cpf" class="form-control" value="{{$p->cpf}}">
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input name="endereco" class="form-control" value="{{$p->endereco}}">
        </div>
        <div class="form-group">
            <label>Bairro</label>
            <input name="bairro" class="form-control" value="{{$p->bairro}}">
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <input name="cidade" class="form-control" value="{{$p->cidade}}">
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input name="telefone" class="form-control" value="{{$p->telefone}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" value="{{$p->email}}">
        </div>                            
        <button type="submit" class="btn btn-primary btn-block">Alterar</button>
    </form>

@stop