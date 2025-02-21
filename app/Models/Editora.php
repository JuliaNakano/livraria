<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $table = 'editora';

    protected $fillable = [
        'cnpj',
        'nome'
    ];

}
