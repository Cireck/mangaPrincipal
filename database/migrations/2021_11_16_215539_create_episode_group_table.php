<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodeGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode_group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idioma');
            $table->string('link_descarga')->nullable();
            $table->string('link_apoyo')->nullable();
            $table->dateTime('date_publication');
            $table->timestamps();
        });
        //crear una relacion entre tablas
        Schema::table('episode_group', function (Blueprint $table) {
            $table->unsignedBigInteger('episode_id')->after('id')->nullable();
            $table->foreign('episode_id')->references('id')->on('episodes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        //crear una relacion entre tablas
        Schema::table('episode_group', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id')->after('id')->nullable();
            $table->foreign('group_id')->references('id')->on('groups')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        //crear una relacion entre tablas
        Schema::table('episode_group', function (Blueprint $table) {
            $table->unsignedBigInteger('manga_id')->after('id')->nullable();
            $table->foreign('manga_id')->references('id')->on('mangas')
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
        Schema::dropIfExists('episode_group');
    }
}
