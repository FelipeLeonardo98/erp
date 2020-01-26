<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// esse "Eloquent" é um Framework ORM (objeto relacional), que você nem precisa usar SQL natiro

class Usuario extends Model
{
    //setando o nome da table
    protected $table = 'usuario';
}
