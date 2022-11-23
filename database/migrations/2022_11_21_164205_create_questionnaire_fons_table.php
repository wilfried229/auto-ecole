<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaireFonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire_fons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre')->comment('titre de chaque question');
            $table->text('a')->nullable();
            $table->text('b')->nullable();
            $table->text('c')->nullable();
            $table->text('d')->nullable();
            $table->text('e')->nullable();
            $table->text('reponse')->nullable();
            $table->text('audio')->nullable()->comment('updloaded les fichiers audios');
            $table->text('img')->nullable();
            $table->bigInteger('sujet_fons_id')->unsigned()->nullable();
            $table->bigInteger('chapitre_id')->unsigned()->nullable();
             
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
        Schema::dropIfExists('questionnaire_fons');
    }
}
