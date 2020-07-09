<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lapak extends Model
{
    protected $fillable = [
        'id','user_id','namaLapak','pemilik','url','hp','kab','kec','alamat1','alamat2'
    ];
    public $incrementing = false;
}
