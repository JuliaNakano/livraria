<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemVenda extends Model
{
    //
    protected $table = 'itemVenda';

    protected $fillable = [
        'livro_id',
        'venda_id',
        'quantidade'
    ];


}
