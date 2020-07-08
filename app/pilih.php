<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pilih extends Model
{
    protected $fillable = [
        'id','barang_id','harga','jumlah','total','pembeli'
    ];
    public $incrementing = false;
}
