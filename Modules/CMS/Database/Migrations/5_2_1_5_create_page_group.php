<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageGroup extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_group', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('default_parent');
            $table->integer('default_template');
            $table->integer('order_by_attribute_id')->nullable();
            $table->string('order_dir')->nullable();
            $table->timestamps();
        });

        Schema::table('cms_page_group_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('page_group_id');
            $table->string('name');
            $table->string('item_name');
            $table->string('locale',20)->index();

            $table->unique(['page_group_id','locale'], 'ku_page_group_locale_unique');
            $table->foreign('page_group_id', 'fk_cpg_pagegroup')->references('id')->on('cms_page_group')->onDelete('cascade');
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