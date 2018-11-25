@extends('layout.principal')
@section('conteudo')
<a href="{{action('CondpagController@novo')}}">
    <button type="submit" class="btn btn-success">Nova Condição de Pagamento</button>
</a>  

  @if(empty($condpags))
    <div>Você não tem nenhuma condição de pagamento cadastrada</div>
    @else
      <h1>Listagem de Condição de Pagamento</h1>
        <table class="table table-striped
                      table-bordered table-hover">
          @foreach ($condpags as $c)
            <tr>
              <td>{{ $c->id }}</td>   
              <td>{{ $c->descricao }}</td>  
              <td>
                <a href="{{action('CondpagController@busca', $c->id)}}">                  
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
              </td>                
              <td>
                <a href="{{action('CondpagController@remove', $c->id)}}">                  
                  <span class="glyphicon glyphicon-trash"></span>
                </a>
              </td>          
            </tr>
          @endforeach
        </table>
  @endif    

  @if(old('descricao'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> A Condição de Pagamento {{ old('descricao') }} foi adicionada.
  </div>
  @endif

@stop