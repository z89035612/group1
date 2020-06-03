<?php

namespace App\Transaction;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //資料表名稱
    protected $table = 'transactions';

    //主鍵名稱
    protected $primaryKey = 'id';

    //可以大量指定異動的欄位
    protected $fillable = [
        "user_id",
        "pro_no",
        "pro_price",
        "total_price",
    ];
}
