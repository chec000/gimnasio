<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageGroupAttributes extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_group_attributes', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('group_id');
            $table->integer('item_block_id');
            $table->integer('filter_by_block_id');
            $table->timestamps();

            //$table->foreign('group_id', 'fk_cpga_pagegroup')->references('id')->on('cms_page_group');
            //$table->foreign('item_block_id', 'fk_cpga_blocks')->references('id')->on('cms_blocks');
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