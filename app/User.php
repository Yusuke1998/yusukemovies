<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function movies(){
        return $this->hasMany('App\Movie');
    }

    public function qualifications(){
        return $this->hasMany('App\Qualification');
    }

    public function commentaries(){
        return $this->hasMany('App\Commentary');
    }
}
