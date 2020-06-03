<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class newuser extends Model
{
    //資料表名稱
    protected $table = 'members';

    //主鍵名稱
    protected $primaryKey = 'id';

    //可以大量指定異動的欄位
    protected $fillable = [
        "name",
        "email",
        "password",
        "type",
    ];
}
