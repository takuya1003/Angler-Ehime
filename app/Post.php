<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'port_id',
        'content'
    ];

    /**
     * 
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    /**
     * 
     */
    public function port()
    {
        return $this->belongsTo(\App\Port::class, 'port_id');
    }

    public function post()
    {

    }

    public function comments(){
        return $this->hasMany(\App\Comment::class,'post_id', 'id')
        ->orderBy('id','desc');
    }

}
