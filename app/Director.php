<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = "directors";
   	protected $fillable = [
        'firstname', 'lastname', 'biography',
    ];

    public function movies(){
    	return $this->hasMany('App\Movie');
    }
}
