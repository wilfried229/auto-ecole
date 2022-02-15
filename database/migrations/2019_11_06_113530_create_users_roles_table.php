<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
            $table->date('desactivation_date')->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();


            $table->foreign('user_id', 'foreign_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

        $table->foreign('role_id', 'foreign_role')
            ->references('id')
            ->on('roles')
            ->onDelete('cascade');

        $table->unique(['user_id', 'role_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_roles');
    }
}
