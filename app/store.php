<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $fillable = [
        'id','lapak_id','namaBarang','kategori','harga','bobot','kondisi','deskripsi','photo','url','volume'
    ];
    public $incrementing = false;
}
