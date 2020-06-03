<?php

namespace App\Album;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    //資料表名稱
    protected $table = 'album';

    //主鍵名稱
    protected $primaryKey = 'id';

    //可以大量指定異動的欄位
    protected $fillable = [
        "name",
    ];
}
