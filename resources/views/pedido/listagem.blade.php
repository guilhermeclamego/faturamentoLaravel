@extends('layout.principal')
@section('conteudo')

<a href="{{action('PedidoController@novo')}}">
  <button type="submit" class="btn btn-success">Novo Pedido</button>
</a>  
  @if(empty($pedidos))
    <div>Você não tem nenhum pedido cadastrado</div>
    @else
      <h1>Listagem de Pedido</h1>
        <table class="table table-striped
                      table-bordered table-hover">
          @foreach ($pedidos as $p)
            <tr>
              <td>{{ $p->id }}</td>   
              <td>{{ $p->pessoa_id }}</td>
              <td>{{ $p->condpag_id }}</td>
              <td>{{ $p->produto_id }}</td>
              <td>{{ $p->observacao }}</td>
              <td>
                <a href="{{action('PedidoController@mostra', $p->id)}}">                  
                  <span class="glyphicon glyphicon-search"></span>
                </a>
              </td>     
              <td>
                <a href="{{action('PedidoController@busca', $p->id)}}">                  
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
              </td>                
              <td>
                <a href="{{action('PedidoController@remove', $p->id)}}">                  
                  <span class="glyphicon glyphicon-trash"></span>
                </a>
              </td>          
            </tr>
          @endforeach
        </table>
  @endif      

  @if(old('id'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> O pedido {{ old('id') }} foi adicionado.
  </div>
  @endif

@stop