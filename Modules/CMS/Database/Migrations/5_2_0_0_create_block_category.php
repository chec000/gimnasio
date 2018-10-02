<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockCategory extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_block_category', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::table('cms_block_category_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('block_category_id');
            $table->string('name');
            $table->string('locale',20)->index();

            $table->unique(['block_category_id','locale'], 'ku_blockcategory_locale_unique');
            $table->foreign('block_category_id','fk_cbct_blockcategory')->references('id')->on('cms_block_category')->onDelete('cascade');
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