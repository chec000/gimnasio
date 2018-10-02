<?php

use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class AddSearchAction extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        $date = new Carbon;
        DB::table('glob_admin_controllers')->insert(
            array(
                array(
                    'controller' => 'adminsearch',
                    'role_order' => 0,
                    'role_section' => 2,
                    'created_at' => $date,
                    'updated_at' => $date
                )
            )
        );

        $controller_id = DB::getPdo()->lastInsertId();


        DB::table('glob_admin_controller_translations')->insert(
            array(
                array(
                    'admin_controller_id' => $controller_id,
                    'role_name' => 'Admin Search',
                    'locale' => 'en'
                )
            )
        );

        $controller = DB::table('glob_admin_controllers')->select('id')->where('controller', '=', 'adminsearch')->first();
        DB::table('glob_admin_actions')->insert(
            array(
                array(
                    'controller_id' => $controller->id,
                    'action' => 'index',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                )
            )
        );

        $action_id = DB::getPdo()->lastInsertId();

        DB::table('glob_admin_action_translations')->insert(
            array(
                array(
                    'admin_action_id' => $action_id,
                    'name' => 'Ajax Search',
                    'about' => null,
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
        $controller = DB::table('glob_admin_controllers')->select('id')->where('controller', '=', 'adminsearch')->first();
        DB::table('glob_admin_actions')->where('controller_id', '=', $controller->id)->where('action', '=', 'index')->delete();
        DB::table('glob_admin_controllers')->where('id', '=', $controller->id)->delete();
    }

}
