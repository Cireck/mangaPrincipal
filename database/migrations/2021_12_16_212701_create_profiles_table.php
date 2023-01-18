<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nick', 30)->nullable();
            $table->string('email', 100)->unique();
            $table->string('country', 4)->nullable(); //pais
            $table->string('gender', 2)->nullable(); //genero
            $table->date('birthday')->nullable(); //cumpleanos
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('sitio_web')->nullable();
            $table->boolean('profile_view')->default(1); //si el perfil sera publico o privado
            $table->integer('mode_view')->default(0); //modo de ver el episodio del manga: por defecto, cascada o paginado
            $table->string('url');
            $table->timestamps();
        });
        //crear una relacion entre tablas
        Schema::table('profiles', function (Blueprint $table) {
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
        Schema::dropIfExists('profiles');
    }
}
