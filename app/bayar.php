<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bayar extends Model
{
    protected $fillable = [
        'id','kode','total','alamat','status','pembeli','penjual'
    ];
    public $incrementing = false;
}
