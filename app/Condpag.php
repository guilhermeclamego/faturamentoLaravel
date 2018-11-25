<?php

namespace faturamento;

use Illuminate\Database\Eloquent\Model;

class Condpag extends Model
{
    protected $table = 'condpags';
	public $timestamps = false;

    protected $fillable = array('id', 'descricao');

    protected $guarded = ['id'];
}
