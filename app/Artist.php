<?php

namespace App\Artist;

use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    //資料表名稱
    protected $table = 'artist';

    //主鍵名稱
    protected $primaryKey = 'id';

    //可以大量指定異動的欄位
    protected $fillable = [
        "title",

    ];
}
