@extends('layout.principal')
@section('conteudo')

<a href="{{action('PessoaController@lista')}}">
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

<h1>Nova Pessoa</h1>

<form action="/pessoas/adiciona" method="post"> 

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <div class="form-group">
        <label>Nome</label>        
        <input name="nome" class="form-control"
            value="{{ old('nome') }}">
    </div>    
    <div class="form-group">
        <label>CPF</label>        
        <input name="cpf" class="form-control"
            value="{{ old('cpf') }}">
    </div> 
    <div class="form-group">
        <label>Endereço</label>        
        <input name="endereco" class="form-control"
            value="{{ old('endereco') }}">
    </div> 
    <div class="form-group">
        <label>Bairro</label>        
        <input name="bairro" class="form-control"
            value="{{ old('bairro') }}">
    </div>  
    <div class="form-group">
        <label>Cidade</label>        
        <input name="cidade" class="form-control"
            value="{{ old('cidade') }}">
    </div> 
    <div class="form-group">
        <label>Telefone</label>        
        <input name="telefone" class="form-control"
            value="{{ old('telefone') }}">
    </div> 
    <div class="form-group">
        <label>Email</label>        
        <input name="email" class="form-control"
            value="{{ old('email') }}">
    </div> 
    <button type="submit" class="btn btn-primary btn-block">Adicionar</button>        
</form>

@stop