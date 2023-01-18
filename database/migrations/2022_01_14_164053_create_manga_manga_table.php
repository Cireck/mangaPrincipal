<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangaMangaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga_manga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
        //crear una relacion entre tablas
        Schema::table('manga_manga', function (Blueprint $table) {
            $table->unsignedBigInteger('manga_id_p')->after('id')->nullable();
            $table->foreign('manga_id_p')->references('id')->on('mangas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        //crear una relacion entre tablas
        Schema::table('manga_manga', function (Blueprint $table) {
            $table->unsignedBigInteger('manga_id_h')->after('id')->nullable();
            $table->foreign('manga_id_h')->references('id')->on('mangas')
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
        Schema::dropIfExists('manga_mangas');
    }
}
