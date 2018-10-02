<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminMenu extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('glob_admin_menu', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('action_id');
            $table->integer('parent');
            $table->integer('order');
            $table->string('icon');
            $table->boolean('active')->default(1);
            $table->timestamps();

            //$table->foreign('action_id','fk_gam_actions')->references('id')->on('glob_admin_actions');
        });

        Schema::table('glob_admin_menu_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('admin_menu_id');
            $table->string('item_name');
            $table->string('item_desc')->nullable();
            $table->string('locale',20)->index();

            $table->unique(['admin_menu_id','locale'], 'ku_admin_menu_locale_unique');
            $table->foreign('admin_menu_id','fk_gamt_menu')->references('id')->on('glob_admin_menu')->onDelete('cascade');
        });

        $date = new Carbon;

        DB::table('glob_admin_menu')->insert(
            array(
                array(
                    'action_id' => 1,
                    'parent' => 0,
                    'order' => 1,
                    'icon' => 'fa fa-home',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'action_id' => 5,
                    'parent' => 0,
                    'order' => 2,
                    'icon' => 'fa fa-file-text-o',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'action_id' => 18,
                    'parent' => 0,
                    'order' => 3,
                    'icon' => 'fa fa-bars',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'action_id' => 25,
                    'parent' => 0,
                    'order' => 4,
                    'icon' => 'fa fa-globe',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'action_id' => 28,
                    'parent' => 0,
                    'order' => 5,
                    'icon' => 'fa fa-exchange',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'action_id' => 26,
                    'parent' => 0,
                    'order' => 6,
                    'icon' => 'fa fa-folder-open',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'action_id' => 39,
                    'parent' => 0,
                    'order' => 7,
                    'icon' => 'fa fa-user',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'action_id' => 43,
                    'parent' => 0,
                    'order' => 8,
                    'icon' => 'fa fa-bullhorn',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'action_id' => 62,
                    'parent' => 0,
                    'order' => 9,
                    'icon' => 'fa fa-tint',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'action_id' => 64,
                    'parent' => 0,
                    'order' => 9,
                    'icon' => 'fa fa-bluetooth-b',
                    'created_at' => $date,
                    'updated_at' => $date
                )
            )
        );

        //glob_admin_menu_translations
        DB::table('glob_admin_menu_translations')->insert(
            array(
                array(
                    'admin_menu_id' => 1,
                    'item_name' => 'Dashboard',
                    'item_desc' => '',
                    'locale' => 'en'
                ),
                array(
                    'admin_menu_id' => 2,
                    'item_name' => 'Pages',
                    'item_desc' => '',
                    'locale' => 'en'
                ),
                array(
                    'admin_menu_id' => 3,
                    'item_name' => 'Menus',
                    'item_desc' => '',
                    'locale' => 'en'
                ),
                array(
                    'admin_menu_id' => 4,
                    'item_name' => 'Site-wide Content',
                    'item_desc' => '',
                    'locale' => 'en'
                ),
                array(
                    'admin_menu_id' => 5,
                    'item_name' => 'Redirects',
                    'item_desc' => '',
                    'locale' => 'en'
                ),
                array(
                    'admin_menu_id' => 6,
                    'item_name' => 'File Manager',
                    'item_desc' => '',
                    'locale' => 'en'
                ),
                array(
                    'admin_menu_id' => 7,
                    'item_name' => 'Users',
                    'item_desc' => '',
                    'locale' => 'en'
                ),
                array(
                    'admin_menu_id' => 8,
                    'item_name' => 'Roles',
                    'item_desc' => '',
                    'locale' => 'en'
                ),
                array(
                    'admin_menu_id' => 9,
                    'item_name' => 'Theme',
                    'item_desc' => '',
                    'locale' => 'en'
                ),
                array(
                    'admin_menu_id' => 10,
                    'item_name' => 'Beacons',
                    'item_desc' => '',
                    'locale' => 'en'
                )
            )
        );
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