<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role', 15)->default('user');
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::table('groups', function (Blueprint $table) {
            $table->dropForeign('groups_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::table('group_user', function (Blueprint $table) {
            $table->dropForeign('group_user_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::table('manga_user', function (Blueprint $table) {
            $table->dropForeign('manga_user_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->dropForeign('reports_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign('profiles_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::dropIfExists('users');
    }
}
