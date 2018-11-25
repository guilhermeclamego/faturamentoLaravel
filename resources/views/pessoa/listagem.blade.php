@extends('layout.principal')
@section('conteudo')

<a href="{{action('PessoaController@novo')}}">
  <button type="submit" class="btn btn-success">Nova Pessoa</button>
</a>  
  @if(empty($pessoas))
    <div>Você não tem nenhuma pessoa cadastrada</div>
    @else
      <h1>Listagem de Pessoa</h1>
        <table class="table table-striped
                      table-bordered table-hover">
          @foreach ($pessoas as $p)
            <tr>
              <td>{{ $p->id }}</td>   
              <td>{{ $p->nome }}</td>
              <td>{{ $p->cpf }}</td>
              <td>{{ $p->endereco }}</td>
              <td>{{ $p->bairro }}</td>
              <td>{{ $p->cidade }}</td>
              <td>{{ $p->telefone }}</td>
              <td>{{ $p->email }}</td>
              <td>
                <a href="{{action('PessoaController@mostra', $p->id)}}">                  
                  <span class="glyphicon glyphicon-search"></span>
                </a>
              </td>     
              <td>
                <a href="{{action('PessoaController@busca', $p->id)}}">                  
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
              </td>                
              <td>
                <a href="{{action('PessoaController@remove', $p->id)}}">                  
                  <span class="glyphicon glyphicon-trash"></span>
                </a>
              </td>          
            </tr>
          @endforeach
        </table>
  @endif      

  @if(old('nome'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> A pessoa {{ old('nome') }} foi adicionada.
  </div>
  @endif

@stop