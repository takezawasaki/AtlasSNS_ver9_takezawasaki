<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //カラム作成
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username',255);
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->string('bio',400)->nullable();
            $table->string('icon_image',255);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //テーブル削除
         Schema::dropIfExists('users');

    }
};

