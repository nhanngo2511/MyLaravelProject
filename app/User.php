<?php

namespace App;

use App\Post;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @vararray
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function Posts(){       
        return $this->hasMany('App\Post');
    }

    public function Roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
