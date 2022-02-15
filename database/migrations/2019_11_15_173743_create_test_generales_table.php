<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestGeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_generales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vrai')->nullable();
            $table->string('question_choice')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('chapitre_id')->unsigned()->nullable();
            $table->bigInteger('test_id')->unsigned()->nullable();
            $table->bigInteger('question_id')->unsigned()->nullable();
            $table->bigInteger('sujet_id')->unsigned()->nullable();

            $table->timestamps();


            $table->foreign('sujet_id')
            ->references('id')
            ->on('sujets')
            ->onDelete('cascade');


            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('question_id')
            ->references('id')
            ->on('questions')
            ->onDelete('cascade');


            $table->foreign('chapitre_id')
            ->references('id')
            ->on('chapitres')
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
        Schema::dropIfExists('test_generales');
    }
}
