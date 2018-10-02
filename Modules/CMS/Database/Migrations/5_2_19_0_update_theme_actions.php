<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;

class UpdateThemeActions extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {

        $date = new Carbon;

        $themesController = DB::table('glob_admin_controllers')->select('id')->where('controller', '=', 'themes')->first();
        $updateAction = DB::table('glob_admin_actions')->select('id')->where('controller_id', '=', $themesController->id)->where('action', '=', 'update')->first();

        DB::table('glob_admin_actions')->insert(
            array(
                array(
                    'controller_id' => $themesController->id,
                    'action' => 'forms',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                )
            )
        );

        $lastInsertId = DB::getPdo()->lastInsertId();

        DB::table('glob_admin_action_translations')->insert(
            array(
                array(
                    'admin_action_id' => $lastInsertId,
                    'name' => 'Change Form Rules',
                    'about' => null,
                    'locale' => 'en'
                )
            )
        );

        DB::table('glob_user_roles_actions')->insert(
            array(
                array(
                    'role_id' => 2,
                    'action_id' => $updateAction->id,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'role_id' => 2,
                    'action_id' => $lastInsertId,
                    'created_at' => $date,
                    'updated_at' => $date
                )
            )
        );

        DB::table('glob_admin_actions')->where('controller_id', '=', $themesController->id)->where('action', '=', 'update')->update(['inherit' => 0]);
        DB::table('glob_admin_action_translations')->join('glob_admin_actions', 'glob_admin_actions.id', '=', 'glob_admin_action_translations.admin_action_id')->where('controller_id', '=', $themesController->id)->where('action', '=', 'index')->update(['name' => 'Show Theme Management']);

    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {

    }

}