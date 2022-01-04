<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name', 'alamat', 'ttl','fakultas','univ','lk1','lok1','lk2','lok2','sc','loksc','lk3','lok3','lkk','lok4'
    ];

    protected $hidden = [

    ];
}
