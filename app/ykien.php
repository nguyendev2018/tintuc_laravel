<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ykien extends Model
{
    protected $table = "ykien";
    protected $primaryKey='idYKien';

    public $fillable =['idYKien', 'idTin','NoiDung','Email','HoTen','idTin','Ngay','AnHien'];
    public $timestamps = false;
}
