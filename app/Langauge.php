<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langauge extends Model
{
    //
    protected $fillable=[
        'name', 'alies', 'default', 'status', 'direction', 'img',
    ];
}
