<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesGeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes_generales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('note')->nullable();
            $table->string('apreciation');
            $table->text('description')->nullable();
            $table->integer('test_id')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('notes_generales');
    }
}
