<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminControllers extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('glob_admin_controllers', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->string('controller');
            $table->integer('role_order');
            $table->integer('role_section');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::table('glob_admin_controller_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('admin_controller_id');
            $table->string('role_name');
            $table->string('locale',20)->index();

            $table->unique(['admin_controller_id','locale'], 'ku_controller_locale_unique');
            $table->foreign('admin_controller_id','fk_gact_controllers')->references('id')->on('glob_admin_controllers')->onDelete('cascade');
        });

        $date = new Carbon;

        DB::table('glob_admin_controllers')->insert(
            array(
                array(
                    'controller' => 'home',
                    'role_order' => 1,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'pages',
                    'role_order' => 1,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'groups',
                    'role_order' => 1,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'menus',
                    'role_order' => 2,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'blocks',
                    'role_order' => 3,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'filemanager',
                    'role_order' => 4,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'redirects',
                    'role_order' => 5,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'account',
                    'role_order' => 1,
                    'role_section' => 2,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'system',
                    'role_order' => 2,
                    'role_section' => 2,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'users',
                    'role_order' => 1,
                    'role_section' => 3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'roles',
                    'role_order' => 2,
                    'role_section' => 3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'backups',
                    'role_order' => 3,
                    'role_section' => 3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'repeaters',
                    'role_order' => 1,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'gallery',
                    'role_order' => 1,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'forms',
                    'role_order' => 1,
                    'role_section' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller' => 'themes',
                    'role_order' => 3,
                    'role_section' => 2,
                    'created_at' => $date,
                    'updated_at' => $date
                )

            )
        );


        //admin_controllers_translations
        DB::table('glob_admin_controller_translations')->insert(
            array(
                array(
                    'admin_controller_id' => 1,
                    'role_name' => 'Dashboard',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 2,
                    'role_name' => 'Pages',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 3,
                    'role_name' => 'Groups',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 4,
                    'role_name' => 'Menus',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 5,
                    'role_name' => 'Site-wide Content',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 6,
                    'role_name' => 'Filemanager',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 7,
                    'role_name' => 'Redirects',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 8,
                    'role_name' => 'User Account',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 9,
                    'role_name' => 'System Settings',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 10,
                    'role_name' => 'Users',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 11,
                    'role_name' => 'Roles',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 12,
                    'role_name' => 'Backups',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 13,
                    'role_name' => 'Repeaters',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 14,
                    'role_name' => 'Galleries',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 15,
                    'role_name' => 'Forms',
                    'locale' => 'en'
                ),
                array(
                    'admin_controller_id' => 16,
                    'role_name' => 'Themes',
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