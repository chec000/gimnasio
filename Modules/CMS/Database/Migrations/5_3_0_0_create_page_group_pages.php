<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageGroupPages extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_group_pages', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('page_id');
            $table->integer('group_id');
            $table->timestamps();

            //$table->foreign('page_id','fk_cpgp_pages')->references('id')->on('cms_pages');
            //$table->foreign('group_id','fk_cpgp_pagegroup')->references('id')->on('cms_page_group');
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