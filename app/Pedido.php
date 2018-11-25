<?php

namespace faturamento;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
	public $timestamps = false;

    protected $fillable = array('id', 'pessoa_id', 
    'condpag_id', 'produto_id', 'observacao');

    protected $guarded = ['id'];
}
