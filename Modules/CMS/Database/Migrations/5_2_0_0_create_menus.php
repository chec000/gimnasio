<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenus extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_menus', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->string('name');
            $table->integer('max_sublevel')->default(0);
            $table->timestamps();
        });

        Schema::table('cms_menu_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('menu_id');
            $table->string('label');
            $table->string('locale',20)->index();

            $table->unique(['menu_id','locale'], 'ku_menu_locale_unique');
            $table->foreign('menu_id','fk_cmt_menus')->references('id')->on('cms_menus')->onDelete('cascade');
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