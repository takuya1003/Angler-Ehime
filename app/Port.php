<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    protected $fillable = [
        'id',
        'port_name',
        'latitude',
        'longitude'
    ];

    public function post()
    {
        return $this->hasmany(\App\Port::class, 'id');
    }
}
