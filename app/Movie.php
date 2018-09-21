<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies";
   	protected $fillable = [
        'title', 'sinopsis', 'content', 'user_id', 'year_id', 'director_id', 'category_id',
    ];

    public function actors(){
    	return $this->belongsToMany('App\Actor');
    }

    public function director(){
    	return $this->belongsTo('App\Director');
    }

    public function posters(){
    	return $this->hasMany('App\Poster');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function year(){
    	return $this->belongsTo('App\Year');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function commentaries(){
        return $this->hasMany('App\Commentary');
    }

    public function qualifications(){
        return $this->hasMany('App\Qualification');
    }
}
