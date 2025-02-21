<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    // Define a tabela a qual o modelo pertence
    protected $table = 'livro';

     // Atributos que podem ser preenchidos em massa
     protected $fillable = [
        'fornecedor_id', 
        'editora_id', 
        'nome',
        'quantidade',
        'descricao'
        ];    

        


}
