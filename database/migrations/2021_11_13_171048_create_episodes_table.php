<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('episode', 10, 2);
            $table->integer('volumen');
            $table->string('title')->nullable();
            $table->integer('view');
            $table->timestamps();
        });
        //crear una relacion entre tablas
        Schema::table('episodes', function (Blueprint $table) {
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
        Schema::table('episode_group', function (Blueprint $table) {
            $table->dropForeign('episode_group_episode_id_foreign');
            $table->dropColumn('episode_id');
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->dropForeign('reports_episode_id_foreign');
            $table->dropColumn('episode_id');
        });
        Schema::dropIfExists('episodes');
    }
}
