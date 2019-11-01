<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fiillable = ['titulo' , 'descricao'];

    protected $table = 'posts'; 

    public function comentario(){
    	return $this->morphMany(Comentario::class, 'comentario');
    }
}
