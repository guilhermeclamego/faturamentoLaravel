<?php

namespace faturamento\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidosRequest extends FormRequest
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
    public function rules()
    {
        return [
            'pessoa_id' => 'required|integer',
            'condpag_id' => 'required|integer',
            'produto_id' => 'required|integer',
            'observacao' => 'required|max:150'
        ];   
    }
}
