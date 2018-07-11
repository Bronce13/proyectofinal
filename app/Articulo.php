<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Articulo extends Model
{



    protected $table = "articulos";

    protected $fillable = ['tittle', 'content', 'categoria_id', 'user_id'];

     public function categoria()
    {

    	return $this->belongsTo('App\Categoria');   
    }

     public function user()
    {

    	return $this->belongsTo('App\User');   
    }


    public function tags()
    {

    	return $this->belongsToMany('App\Tag');   
    }
}
