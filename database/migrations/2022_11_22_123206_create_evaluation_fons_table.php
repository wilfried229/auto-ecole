<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationFonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_fons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vrai')->nullable();
            $table->string('question_choice')->nullable();
            $table->bigInteger('sujet_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('test_id')->unsigned()->nullable();
            $table->bigInteger('question_id')->unsigned()->nullable();
            $table->boolean('is_finish')->default(false);
            $table->foreign('question_id')
            ->references('id')
            ->on('questions')
            ->onDelete('cascade');
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
        Schema::dropIfExists('evaluation_fons');
    }
}
