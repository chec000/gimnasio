<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsers extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('glob_users', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('active')->default(1);
            $table->string('password');
            $table->string('email');
            $table->unsignedInteger('role_id');
            $table->string('position');
            $table->unsignedInteger('language_id');
            $table->rememberToken();
            $table->string('tmp_code')->nullable();
            $table->timestamp('tmp_code_created')->nullable();
            $table->string('blog_login')->nullable();
            $table->text('page_states')->nullable();
            $table->timestamps();

            $table->foreign('role_id','fk_gu_roles')->references('id')->on('glob_user_roles');
            $table->foreign('language_id','fk_gu_lang')->references('id')->on('glob_languages');
        });

        Schema::table('glob_user_countries', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('country_id');
            $table->integer('active')->default(1);

            $table->foreign('user_id','fk_guc_users')->references('id')->on('glob_users');
            $table->foreign('country_id','fk_guc_countries')->references('id')->on('glob_countries');
        });

        Schema::table('glob_user_brands', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('brand_id');
            $table->integer('active')->default(1);

            $table->foreign('user_id','fk_gub_users')->references('id')->on('glob_users');
            $table->foreign('brand_id','fk_gub_brands')->references('id')->on('glob_brands');
        });


    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        //
    }

}