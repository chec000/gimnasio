<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;

class UpdateThemeSelectActions extends Migration
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

        DB::table('glob_admin_actions')->insert(
            array(
                array(
                    'controller_id' => $themesController->id,
                    'action' => 'selects',
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
                    'name' => 'Change Select Block Options',
                    'about' => null,
                    'locale' => 'en'
                )
            )
        );

        DB::table('glob_user_roles_actions')->insert(
            array(
                array(
                    'role_id' => 2,
                    'action_id' => $lastInsertId,
                    'created_at' => $date,
                    'updated_at' => $date
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

    }

}