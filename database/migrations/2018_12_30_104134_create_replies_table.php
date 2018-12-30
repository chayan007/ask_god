<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replys', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('message');
            $table->foreign('message')->references('id')->on('messages');
            $table->longText('reply');
            $table->unsignedInteger('to');
            $table->foreign('to')->references('id')->on('users');
            $table->unsignedInteger('from');
            $table->foreign('from')->references('id')->on('users');
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
        Schema::dropIfExists('replys');
    }
}
