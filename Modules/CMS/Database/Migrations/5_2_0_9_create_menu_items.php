<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuItems extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_menu_items', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('menu_id');
            $table->integer('page_id');
            $table->integer('order')->default(0);
            $table->integer('sub_levels')->default(0);

            $table->timestamps();
        });

        Schema::table('cms_menu_item_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('menu_item_id');
            $table->text('custom_name')->nullable();
            $table->string('locale',20)->index();

            $table->unique(['menu_item_id','locale'], 'ku_menu_items_locale_unique');
            $table->foreign('menu_item_id','fk_cmit_menuitems')->references('id')->on('cms_menu_items')->onDelete('cascade');
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