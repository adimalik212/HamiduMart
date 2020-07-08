<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pilih extends Model
{
    protected $table = 'pilihs';
    protected $fillable = [
        'id','barang_id','harga','jumlah','total','pembeli','alamat'
    ];
    public $incrementing = false;
}
