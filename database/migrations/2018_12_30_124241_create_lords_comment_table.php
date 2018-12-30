<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLordsCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lordcomments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('complaint');
            $table->foreign('complaint')->references('id')->on('complaints');
            $table->longText('comment');
            $table->unsignedInteger('lord');
            $table->foreign('lord')->references('id')->on('lords');
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
        Schema::dropIfExists('lordcomments');
    }
}
