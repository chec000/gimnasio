<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplateBlocks extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_theme_template_blocks', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('theme_template_id');
            $table->unsignedInteger('block_id');
            $table->timestamps();

            $table->foreign('theme_template_id','fk_ctb_templates')->references('id')->on('cms_theme_templates');
            $table->foreign('block_id','fk_ctb_blocks')->references('id')->on('cms_blocks');
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