<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= 'usuario';

    protected $fillable=[
        'userName',
        'senha',
        'funcionario_id'
    ];

    
   protected $hidden = [
       'senha',
       'remember_token',
   ];

}
