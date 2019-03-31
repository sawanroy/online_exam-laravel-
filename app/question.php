<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    //

    protected $fillable = [
        'sanme','tname','question','opt1','opt2','opt3','opt4','ans',
    ];
}
