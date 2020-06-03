<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //資料表名稱
    protected $table = 'Products';

    //主鍵名稱
    protected $primaryKey = 'id';

    //可以大量指定異動的欄位
    protected $fillable = [
        "id",
        "pro_no",
        "pro_name",
        "album",
        "artist",
        "price",
    ];
}
