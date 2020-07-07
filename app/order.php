<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'no_order','barang_id','jumlah','totalBayar','pembeli','alamat'
    ];
    public $incrementing = false;
}
