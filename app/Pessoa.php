<?php

namespace faturamento;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
	public $timestamps = false;

    protected $fillable = array('id', 'nome', 
    'cpf','endereco', 'bairro', 'cidade', 'telefone', 'email');

    protected $guarded = ['id'];
}
