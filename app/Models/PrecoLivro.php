<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrecoLivro extends Model
{
    protected $table = 'precolivro';
    protected $fillable = [  
        'livro_id',
        'valor',
        'data'
    ];


}
