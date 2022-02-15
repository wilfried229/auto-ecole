<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->text('reponse')->nullable();
            $table->bigInteger('question_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('question_id')
            ->references('id')
            ->on('questions')
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
        Schema::dropIfExists('reponses');
    }
}
