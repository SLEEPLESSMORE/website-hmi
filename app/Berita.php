<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'tgl', 'photo','judul', 'desc','place'
    ];

    protected $hidden = [

    ];
}
