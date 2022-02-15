<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre')->comment('titre de chaque question');
            $table->text('libelle')->nullable();
            $table->text('a')->nullable();
            $table->text('b')->nullable();
            $table->text('c')->nullable();
            $table->text('d')->nullable();
            $table->text('e')->nullable();
            $table->text('reponse')->nullable();
            $table->text('filename')->nullable()->comment('updloaded les fichiers audios');
            $table->text('extension', 20)->nullable();
            $table->text('img')->nullable();
            $table->bigInteger('sujet_id')->unsigned()->nullable();
            $table->bigInteger('chapitre_id')->unsigned()->nullable();
            $table->timestamps();


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
        Schema::dropIfExists('questions');
    }
}
