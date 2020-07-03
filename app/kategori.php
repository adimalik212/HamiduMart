<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = [
        'kategori','id'
    ];
    public $incrementing = false;
}
