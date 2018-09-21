<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $table = "qualifications";
   	protected $fillable = [
        'movie_id', 'user_id', 'type',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function movie(){
    	return $this->belongsTo('App\Movie');
    }
}
