<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlocks extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_blocks', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->string('type');
            $table->integer('order')->default(0);
            $table->integer('search_weight')->default(1);
            $table->integer('active')->default(1);
            $table->timestamps();

            $table->foreign('category_id','fk_cb_blockcategory')->references('id')->on('cms_block_category');
        });

        Schema::table('cms_block_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('block_id');
            $table->string('label');
            $table->string('locale',20)->index();

            $table->unique(['block_id','locale'], 'ku_block_locale_unique');
            $table->foreign('block_id','fk_cbt_blocks')->references('id')->on('cms_blocks')->onDelete('cascade');
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