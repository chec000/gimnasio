<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockRepeaters extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_block_repeaters', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('block_id');
            $table->string('blocks');
            $table->timestamps();

            //$table->foreign('block_id', 'fk_cbr_blocks')->references('id')->on('cms_blocks');
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