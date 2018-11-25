<?php namespace faturamento\Http\Controllers;
use Illuminate\Support\Facades\DB;
use faturamento\Produto;
use Request;
use Validator;
use faturamento\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller {
    
    public function __construct()
	{
		$this->middleware('auth', ['only' => ['adiciona', 'remove']]);
    }
    
    public function lista(){

        $produtos = Produto::all(); //DB::select('select * from produtos');

        return view ('produto.listagem')->with('produtos',  $produtos);
    }    

    public function mostra($id){

        $produto = Produto::find($id); //DB::select('select * from produtos where id = ?', [$id]);

        if(empty($produto)){
            return "Produto não encontrado!";
        }
        return view ('produto.detalhes')->with('p', $produto);
    }

    public function novo(){

        return view('produto.cadastrar');
    }

    public function adiciona(ProdutosRequest $request){

        Produto::create($request->all()); //Já pega os dados do formulário e insere

        return redirect()
        ->action('ProdutoController@lista')
        ->withInput(Request::only('descricao'));
    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()
            ->action('ProdutoController@lista');
    }

    public function busca($id){
        $resposta = produto::find($id);

        if(empty($resposta)){
            return "Esse produto não existe";
        }

        return view('produto.alterar')->with('p', $resposta);
    }

    public function altera(){
        $params = Request::all(); 
        $produto = Produto::find($params['id']);
        $produto->fill($params);
        $produto->save();

        $produto->update($params);
    

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('descricao'));
    }  
}