<?php namespace faturamento\Http\Controllers;
use Illuminate\Support\Facades\DB;
use faturamento\Pedido;
use Request;
use Validator;
use faturamento\Http\Requests\PedidosRequest;

class PedidoController extends Controller {
    
    public function __construct()
	{
		$this->middleware('auth', ['only' => ['adiciona', 'remove']]);
    }
    
    public function lista(){

        $pedidos = Pedido::all(); 

        return view ('pedido.listagem')->with('pedidos',  $pedidos);
    }    

    public function mostra($id){

        $pedido = Pedido::find($id); 

        if(empty($pedido)){
            return "Pedido não encontrado!";
        }
        return view ('pedido.detalhes')->with('p', $pedido);
    }

    public function novo(){

        return view('pedido.cadastrar');
    }

    public function adiciona(PedidosRequest $request){

        Pedido::create($request->all()); //Já pega os dados do formulário e insere

        return redirect()
        ->action('PedidoController@lista')
        ->withInput(Request::only('id'));
    }

    public function remove($id){
        $pedido = Pedido::find($id);
        $pedido->delete();

        return redirect()
            ->action('PedidoController@lista');
    }

    public function busca($id){
        $resposta = pedido::find($id);

        if(empty($resposta)){
            return "Esse pedido não existe";
        }

        return view('pedido.alterar')->with('p', $resposta);
    }

    public function altera(){
        $params = Request::all(); 
        $pedido = Pedido::find($params['id']);
        $pedido->fill($params);
        $pedido->save();

        $pedido->update($params);
    

        return redirect()->action('PedidoController@lista')->withInput(Request::only('pessoa_id'));
    }  
}