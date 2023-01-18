<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 15)->nullable(); //si lo siguie o esta leyendo
            $table->integer('last_episode')->default(0);
            $table->boolean('like')->nullable();
            $table->timestamps();
        });
        //crear una relacion entre tablas
        Schema::table('manga_user', function (Blueprint $table) {
            $table->unsignedBigInteger('manga_id')->after('id')->nullable();
            $table->foreign('manga_id')->references('id')->on('mangas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        //crear una relacion entre tablas
        Schema::table('manga_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('manga_user');
    }
}
