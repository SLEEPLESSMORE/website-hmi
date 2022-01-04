<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'judul', 'photo', 'author','desc','file',
    ];

    protected $hidden = [

    ];
}
