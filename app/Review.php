<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id','category_id','review','score','level'];

    public function user() {
        return $this -> belongsTo('App\User');
    }
}
