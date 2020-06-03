<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //id 鍵值
            $table->bigIncrements('id')->unique();
            //歌曲編號
            $table->integer('pro_no');
            //歌名
            $table->string('pro_name');
            //專輯名稱
            $table->string('album');
            //歌手
            $table->string('artist');
            //售價
            $table->integer('pro_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
