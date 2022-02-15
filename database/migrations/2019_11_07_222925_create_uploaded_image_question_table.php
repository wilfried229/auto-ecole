<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadedImageQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploaded_image_question', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('filename')->nullable();
            $table->string('extension', 10)->nullable();
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
        Schema::dropIfExists('uploaded_image_question');
    }
}
