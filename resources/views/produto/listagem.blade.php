@extends('layout.principal')
@section('conteudo')

<a href="{{action('ProdutoController@novo')}}">
  <button type="submit" class="btn btn-success">Novo Produto</button>
</a>  
  @if(empty($produtos))
    <div>Você não tem nenhum produto cadastrado</div>
    @else
      <h1>Listagem de Produto</h1>
        <table class="table table-striped
                      table-bordered table-hover">
          @foreach ($produtos as $p)
            <tr class="{{$p->estoque <= 1 ? 'danger': ''}}">
              <td>{{ $p->id }}</td>   
              <td>{{ $p->descricao }}</td>
              <td>{{ $p->valor_custo }}</td>
              <td>{{ $p->valor_venda }}</td>
              <td>{{ $p->estoque }}</td>
              <td>
                <a href="{{action('ProdutoController@mostra', $p->id)}}">                  
                  <span class="glyphicon glyphicon-search"></span>
                </a>
              </td>     
              <td>
                <a href="{{action('ProdutoController@busca', $p->id)}}">                  
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
              </td>                
              <td>
                <a href="{{action('ProdutoController@remove', $p->id)}}">                  
                  <span class="glyphicon glyphicon-trash"></span>
                </a>
              </td>          
            </tr>
          @endforeach
        </table>
  @endif      
  <h4>
    <span class="label label-danger pull-right">
      Vermelho para 1 ou menos itens em estoque
    </span>  
  </h4> 

  @if(old('descricao'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{ old('descricao') }} foi adicionado.
  </div>
  @endif

@stop