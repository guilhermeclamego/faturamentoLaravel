<?php namespace faturamento\Http\Controllers;
use Illuminate\Support\Facades\DB;
use faturamento\Condpag;
use Request;
use Validator;
use faturamento\Http\Requests\CondpagsRequest;

class CondpagController extends Controller {
    
    public function __construct()
	{
		$this->middleware('auth', ['only' => ['adiciona', 'remove']]);
    }
    
    public function lista(){

        $condpags = Condpag::all(); 

        return view ('condpag.listagem')->with('condpags',  $condpags);
    }    

    public function novo(){

        return view('condpag.cadastrar');
    }

    public function adiciona(CondpagsRequest $request){

        Condpag::create($request->all()); //Já pega os dados do formulário e insere

        return redirect()
        ->action('CondpagController@lista')
        ->withInput(Request::only('descricao'));
    }

    public function remove($id){
        $condpag = Condpag::find($id);
        $condpag->delete();

        return redirect()
            ->action('CondpagController@lista');
    }

    public function busca($id){
        $resposta = condpag::find($id);

        if(empty($resposta)){
            return "Essa Condição de pagamento não existe";
        }

        return view('condpag.alterar')->with('c', $resposta);
    }

    public function altera(){
        $params = Request::all(); 
        $condpag = Condpag::find($params['id']);
        $condpag->fill($params);
        $condpag->save();

        $condpag->update($params);
    

        return redirect()->action('CondpagController@lista')->withInput(Request::only('descricao'));
    }  
}