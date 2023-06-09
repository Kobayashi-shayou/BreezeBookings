<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_rooms', function (Blueprint $table) {
            // 料金設定は一部屋いくら（一人でも二人でも同じ）
            $table->id();
            $table->integer('room_no')->unique()->comment('部屋番号');
            $table->integer('room_type')->comment('部屋の名前');
            $table->integer('count')->comment('部屋に泊まれる人数');
            $table->integer('price');
            $table->string('image01')->nullable()->comment('image01がメイン画像');
            $table->string('image02')->nullable();
            $table->string('image03')->nullable();
            $table->string('image04')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_rooms');
    }
};
