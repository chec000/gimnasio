<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageBlocksRepeaterData extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_blocks_repeater_data', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('row_key');
            $table->integer('block_id');
            $table->text('content');
            $table->integer('version');
            $table->timestamps();

            //$table->foreign('row_key', 'fk_cpbrd_reprows')->references('id')->on('cms_page_blocks_repeater_rows');
            //$table->foreign('block_id', 'fk_cpbrd_blocks')->references('id')->on('cms_blocks');
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