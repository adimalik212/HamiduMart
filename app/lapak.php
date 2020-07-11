<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lapak extends Model
{
    protected $fillable = [
        'id','user_id','namaLapak','pemilik','url','hp','kab','kec','prov','alamat','photo'
    ];
    public $incrementing = false;
}
