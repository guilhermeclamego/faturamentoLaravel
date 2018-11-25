<?php namespace faturamento\Http\Controllers;
use Illuminate\Support\Facades\DB;
use faturamento\Pessoa;
use Request;
use Validator;
use faturamento\Http\Requests\PessoasRequest;

class PessoaController extends Controller {
    
    public function __construct()
	{
		$this->middleware('auth', ['only' => ['adiciona', 'remove']]);
    }
    
    public function lista(){

        $pessoas = Pessoa::all(); //DB::select('select * from pessoas');

        return view ('pessoa.listagem')->with('pessoas',  $pessoas);
    }    

    public function mostra($id){

        $pessoa = Pessoa::find($id); //DB::select('select * from pessoas where id = ?', [$id]);

        if(empty($pessoa)){
            return "Pessoa não encontrada!";
        }
        return view ('pessoa.detalhes')->with('p', $pessoa);
    }

    public function novo(){

        return view('pessoa.cadastrar');
    }

    public function adiciona(PessoasRequest $request){

        Pessoa::create($request->all()); //Já pega os dados do formulário e insere

        return redirect()
        ->action('PessoaController@lista')
        ->withInput(Request::only('nome'));
    }

    public function remove($id){
        $pessoa = Pessoa::find($id);
        $pessoa->delete();

        return redirect()
            ->action('PessoaController@lista');
    }

    public function busca($id){
        $resposta = pessoa::find($id);

        if(empty($resposta)){
            return "Essa pessoa não existe";
        }

        return view('pessoa.alterar')->with('p', $resposta);
    }

    public function altera(){
        $params = Request::all(); 
        $pessoa = Pessoa::find($params['id']);
        $pessoa->fill($params);
        $pessoa->save();

        $pessoa->update($params);
    

        return redirect()->action('PessoaController@lista')->withInput(Request::only('nome'));
    }  
}