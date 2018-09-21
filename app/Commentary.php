<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    protected $table = "commentaries";
   	protected $fillable = [
        'movie_id', 'user_id', 'content',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function movie(){
    	return $this->belongsTo('App\Movie');
    }
}
