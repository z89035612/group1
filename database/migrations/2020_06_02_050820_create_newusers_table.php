+<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newusers', function (Blueprint $table) {
            Schema::create('users', function (Blueprint $table) {
                //會員編號
                $table->bigIncrements('id');
                //會員姓名
                $table->string('name');
                //Email+鍵值
                $table->string('email',150)->unique();

                $table->timestamp('email_verified_at')->nullable();
                //密碼
                $table->string('password',60);
                //帳號類型，A(Admin，管理者)，G(General,一般會員)
                $table->string('type',1)->default('G');//帳號狀態

                //設為允許null
                $table->rememberToken()->nullable();
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
        Schema::dropIfExists('newusers');
    }
}
