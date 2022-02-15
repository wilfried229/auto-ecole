<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSujetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sujets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->bigInteger('chapitre_id')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('sujets');
    }
}
