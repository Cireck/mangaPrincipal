<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenderMangaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gender_manga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
        //crear una relacion entre tablas
        Schema::table('gender_manga', function (Blueprint $table) {
            $table->unsignedBigInteger('manga_id')->after('id')->nullable();
            $table->foreign('manga_id')->references('id')->on('mangas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        //crear una relacion entre tablas
        Schema::table('gender_manga', function (Blueprint $table) {
            $table->unsignedBigInteger('gender_id')->after('id')->nullable();
            $table->foreign('gender_id')->references('id')->on('genders')
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
        Schema::dropIfExists('gender_manga');
    }
}
