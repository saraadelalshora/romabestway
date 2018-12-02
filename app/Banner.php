<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable=[
        'title', 'image', 'intro', 'link', 'slug', 'lang_id',
    ];
}
