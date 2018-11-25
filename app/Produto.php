<?php

namespace faturamento;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
	public $timestamps = false;

    protected $fillable = array('id', 'descricao', 
    'valor_custo','valor_venda', 'estoque');

    protected $guarded = ['id'];
}
