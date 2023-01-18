<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->text('tablon')->nullable();
            $table->string('type')->default('Uploader');
            $table->boolean('verified')->default(0);
            $table->string('email')->unique();
            $table->string('facebook')->nullable();
            $table->string('paypal')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google+')->nullable();
            $table->string('discord')->nullable();
            $table->string('sitio_web')->nullable();
            $table->string('url');
            $table->timestamps();
        });

        //crear una relacion entre tablas
        Schema::table('groups', function (Blueprint $table) {
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
        Schema::table('group_manga', function (Blueprint $table) {
            $table->dropForeign('group_manga_group_id_foreign');
            $table->dropColumn('group_id');
        });
        Schema::table('group_user', function (Blueprint $table) {
            $table->dropForeign('group_user_group_id_foreign');
            $table->dropColumn('group_id');
        });

        Schema::table('episode_group', function (Blueprint $table) {
            $table->dropForeign('episode_group_group_id_foreign');
            $table->dropColumn('group_id');
        });

        Schema::dropIfExists('groups');
    }
}
