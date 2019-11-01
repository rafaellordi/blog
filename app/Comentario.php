<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fiillable = ['user_id' , 'comentario', 'comentario_id', 'comentario_tipo'];

    protected $table = 'comentarios'; 

    public function user (){
    	return $this->belongsTo(User: :class);
    }

    public function commentable(){
    	return $this->morphTo();
    }
}
