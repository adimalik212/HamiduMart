<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lapak extends Model
{
    protected $fillable = [
        'id','user_id','namaLapak','pemilik','url','kab','kec'
    ];
    public $incrementing = false;
}
