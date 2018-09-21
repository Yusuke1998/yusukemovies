<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = "actors";
   	protected $fillable = [
        'firstname', 'lastname', 'biography',
    ];

    public function movies(){
    	return $this->belongsToMany('App\Movie');
    }
}
