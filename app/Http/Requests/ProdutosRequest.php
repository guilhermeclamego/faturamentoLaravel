<?php

namespace faturamento\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
                'descricao' => 'required|max:200',
                'valor_custo' => 'required|numeric',
                'valor_venda' => 'required|numeric',
                'estoque' => 'required|integer'
        ];       
    }
}
