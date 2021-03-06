<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
   	protected $fillable = [
        'name', 'content',
    ];

    public function movies(){
    	return $this->hasMany('App\Movie');
    }
}
