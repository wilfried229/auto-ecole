<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre')->nullable();
            $table->integer('number')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('sujet_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');


            $table->foreign('sujet_id')
            ->references('id')
            ->on('sujets')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
