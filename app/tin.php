<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table='tin';
    protected $dates=['Ngay'];
    protected $primaryKey='idTin';
    protected $fillable = [
        'TieuDe',
        'TomTat',
        'urlHinh',
        'AnHien',
        'lang',
        'TinNoiBat',
        'HienMenu',
        'Ngay',
        'Content',
        'tags'
    ];
}
