<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = "tags";
   	protected $fillable = [
        'name', 'content',
    ];

    public function movies(){
    	return $this->belongsToMany('App\Movie');
    }
}
