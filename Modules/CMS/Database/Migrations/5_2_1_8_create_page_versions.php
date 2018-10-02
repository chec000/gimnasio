<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageVersions extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_versions', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('page_id');
            $table->integer('version_id');
            $table->string('template');
            $table->string('label')->nullable();
            $table->string('preview_key');
            $table->integer('user_id');
            $table->timestamps();

            //$table->foreign('page_id','fk_cpv_pages')->references('id')->on('cms_pages');
            //$table->foreign('user_id','fk_cpg_users')->references('id')->on('glob_users');
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