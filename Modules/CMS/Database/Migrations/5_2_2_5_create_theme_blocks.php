<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThemeBlocks extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_theme_blocks', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('theme_id');
            $table->unsignedInteger('block_id');
            $table->integer('show_in_pages')->default(0);
            $table->string('exclude_templates')->default(null);
            $table->integer('show_in_global')->default(1);
            $table->timestamps();

            //$table->foreign('theme_id','fk_ctb_themes')->references('id')->on('cms_themes');
            //$table->foreign('block_id','fk_ctb_tblocks')->references('id')->on('cms_blocks');
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