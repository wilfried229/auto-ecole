<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('note')->nullable();
            $table->string('apreciation');
            $table->text('description')->nullable();
            $table->integer('test_id')->unsigned()->nullable();
            $table->bigInteger('sujet_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('chapitre_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('sujet_id')
            ->references('id')
            ->on('sujets')
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
        Schema::dropIfExists('notes');
    }
}
