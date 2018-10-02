<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageBlocks extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_blocks', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('language_id')->default(1);
            $table->integer('page_id');
            $table->integer('block_id');
            $table->text('content');
            $table->integer('version');
            $table->timestamps();

            //$table->foreign('language_id', 'fk_cpb_languages')->references('id')->on('glob_languages');
            //$table->foreign('page_id', 'fk_cpb_pages')->references('id')->on('cms_pages');
            //$table->foreign('block_id','fk_cpb_blocks')->references('id')->on('cms_blocks');
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