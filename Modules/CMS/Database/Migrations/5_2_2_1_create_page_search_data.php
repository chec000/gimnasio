<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageSearchData extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_search_data', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('language_id');
            $table->integer('page_id');
            $table->integer('block_id');
            $table->text('search_text');
            $table->timestamps();

            //$table->foreign('language_id','fk_cpsd_languages')->references('id')->on('glob_languages');
            //$table->foreign('page_id','fk_cpsd_pages')->references('id')->on('cms_pages');
            //$table->foreign('block_id','fk_cpsd_blocks')->references('id')->on('cms_blocks');
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