@extends('layout.principal')
@section('conteudo')
<a href="{{action('PessoaController@lista')}}">
    <button type="submit" class="btn btn-success">Voltar para Listagem</button>
</a> 
<h1>Detalhes da Pessoa: {{ $p->nome }}</h1>
<ul>    
    <li>
        <b>Nome: </b> {{ $p->nome }}
    </li>
    <li>
        <b>CPF: </b> {{ $p->cpf }}
    </li>
    <li>
        <b>Endereço: </b> {{ $p->endereco }}
    </li>
    <li>
        <b>Bairro: </b> {{ $p->bairro }}
    </li>
    <li>
        <b>Cidade: </b> {{ $p->cidade }}
    </li>
    <li>
        <b>Telefone: </b> {{ $p->telefone }}
    </li>
    <li>
        <b>Email: </b> {{ $p->email }}
    </li>
</ul>

@stop