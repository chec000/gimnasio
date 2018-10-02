<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;

class UpdateSearchLogAdmin extends Migration
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
                    'controller' => 'search',
                    'role_order' => 4,
                    'role_section' => 3,
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
                    'role_name' => 'Search log',
                    'locale' => 'en'
                )
            )
        );


        DB::table('glob_admin_actions')->insert(
            array(
                array(
                    'controller_id' => $controller_id,
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
                    'name' => 'View Search Log',
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
        $controller = DB::table('glob_admin_controllers')->select('id')->where('controller', '=', 'search')->first();
        $action = DB::table('glob_admin_actions')->select('id')->where('action', '=', 'index')->where('controller_id', '=', $controller->id)->first();


        DB::table('glob_user_roles_actions')->where('action_id', '=', $action->id)->delete();
        DB::table('glob_admin_actions')->where('id', '=', $action->id)->delete();
        DB::table('glob_admin_controllers')->where('id', '=', $controller->id)->delete();
    }

}
