<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomPageNamesInMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_menu_items', function(Blueprint $table)
        {
            $table->string('custom_page_names')->after('sub_levels')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cms_menu_items', function(Blueprint $table)
        {
            $table->dropColumn('custom_page_names');
        });
    }

}
