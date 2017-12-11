<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'content'
    ];

    public function User(){

    	return $this->belongsTo('App\User');
    }

}
