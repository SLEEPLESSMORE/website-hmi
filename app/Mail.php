<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = [
        'tanggal', 'title', 'nomor','jenis','file',
    ];

    protected $hidden = [

    ];
}
