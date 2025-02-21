<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LivroAutor extends Model
{
    //
    protected $table= 'livroAutor';
    protected $fillable = [
        'livro_id',
        'autor_id'
    ];

}
