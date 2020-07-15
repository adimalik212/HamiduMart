<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $fillable = [
        'id','lapak_id','namaBarang','kategori','harga','bobot','kondisi','deskripsi','photo','photo2','photo3','url','volume'
    ];
    public $incrementing = false;
}
