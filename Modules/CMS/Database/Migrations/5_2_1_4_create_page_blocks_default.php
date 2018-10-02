<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageBlocksDefault extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_blocks_default', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('country_id');
            $table->integer('language_id')->default(1);
            $table->integer('block_id');
            $table->text('content');
            $table->integer('version');
            $table->timestamps();

            //$table->foreign('language_id', 'fk_cpbd_languages')->references('id')->on('glob_languages');
            //$table->foreign('block_id', 'fk_cpbd_blocks')->references('id')->on('cms_blocks');
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