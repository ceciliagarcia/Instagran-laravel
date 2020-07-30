<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //indicar que tabla modifica este modelo

    protected $table = 'images';

    // Relacion One to many de uno a muchos
    public function comments(){
        return $this->hasMany('App\Comment')->orderBy('id', 'desc');
    }

    //Relacion One to many pero con los likes
    public function likes(){
        return $this->hasMany('App\Like');
    }

    //Relacion Many to One / muchos imagenes pueden crearla un solo usuario
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
