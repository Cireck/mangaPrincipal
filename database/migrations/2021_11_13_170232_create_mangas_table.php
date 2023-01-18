<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sub_name');
            $table->text('description');
            $table->integer('score')->default(10); //putacion del manga
            $table->string('state', 25); //estado del manga
            // $table->string('synonyms');
            $table->string('type', 15); //si es manga o manhwa o otro
            $table->integer('view')->default(0);
            $table->string('demography', 25); //si es shounen o seinen ,etc.
            $table->boolean('webcomic');
            $table->boolean('yonkowa');
            $table->boolean('amateur');
            $table->boolean('erotic');
            $table->string('url');
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
        Schema::table('title_alternatives', function (Blueprint $table) {
            $table->dropForeign('title_alternatives_manga_id_foreign');
            $table->dropColumn('manga_id');
        });
        Schema::table('episode', function (Blueprint $table) {
            $table->dropForeign('episodes_manga_id_foreign');
            $table->dropColumn('manga_id');
        });
        Schema::table('gender_manga', function (Blueprint $table) {
            $table->dropForeign('gender_manga_manga_id_foreign');
            $table->dropColumn('manga_id');
        });
        Schema::table('group_manga', function (Blueprint $table) {
            $table->dropForeign('group_manga_manga_id_foreign');
            $table->dropColumn('manga_id');
        });

        Schema::table('reports', function (Blueprint $table) {
            $table->dropForeign('reports_manga_id_foreign');
            $table->dropColumn('manga_id');
        });

        Schema::table('manga_manga', function (Blueprint $table) {
            $table->dropForeign('manga_manga_manga_id_p_foreign');
            $table->dropColumn('manga_id_p');
        });

        Schema::table('manga_manga', function (Blueprint $table) {
            $table->dropForeign('manga_manga_manga_id_h_foreign');
            $table->dropColumn('manga_id_p');
        });

        Schema::dropIfExists('mangas');
    }
}
