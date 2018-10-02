<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageLang extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_lang', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('page_id');
            $table->integer('language_id');
            $table->string('url');
            $table->string('name');
            $table->integer('live_version');
            $table->timestamps();

            //$table->foreign('page_id','fk_cpg_pages')->references('id')->on('cms_pages');
            //$table->foreign('language_id','fk_cpg_languages')->references('id')->on('glob_languages');
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