<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    //
    protected $table= 'logs';

    protected $fillable = [
        'usuario_id', 
        'tabela',
        'acao', 
        'dadosAntigos', 
        'dadosNovos', 
        'dataHora'
    ];

}
