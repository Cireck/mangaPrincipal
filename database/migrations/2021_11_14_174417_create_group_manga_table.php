<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupMangaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_manga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('state', 15)->nullable();
            $table->timestamps();
        });
        //crear una relacion entre tablas
        Schema::table('group_manga', function (Blueprint $table) {
            $table->unsignedBigInteger('manga_id')->after('id')->nullable();
            $table->foreign('manga_id')->references('id')->on('mangas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        //crear una relacion entre tablas
        Schema::table('group_manga', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id')->after('id')->nullable();
            $table->foreign('group_id')->references('id')->on('groups')
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
        Schema::dropIfExists('group_manga');
    }
}
