<?php

namespace faturamento\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoasRequest extends FormRequest
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
                'nome' => 'required|max:50',
                'cpf' => 'required|max:14',
                'endereco' => 'required|max:80',
                'bairro' => 'required|max:30',
                'cidade' => 'required|max:40',
                'telefone' => 'required|max:20',
                'email' => 'required|max:80'
        ];       
    }
} 