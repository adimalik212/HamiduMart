<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $fillable = [
        'id','barang_id','nama','email','komentar','balas','pemilikBarang'
    ];
    public $incrementing = false;
}
