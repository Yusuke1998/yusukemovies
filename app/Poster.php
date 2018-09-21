<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    protected $table = "posters";
   	protected $fillable = [
        'name', 'movie_id', 'url',
    ];

    public function movie(){
    	return $this->belongsTo('App\Movie');
    }
}
