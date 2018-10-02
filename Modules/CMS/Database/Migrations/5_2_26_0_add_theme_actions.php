<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;

class AddThemeActions extends Migration
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
        $indexAction = DB::table('glob_admin_actions')->select('id')->where('controller_id', '=', $themesController->id)->where('action', '=', 'index')->first();

        $actions =  array(
            array(
                'controller_id' => $themesController->id,
                'action' => 'list',
                'inherit' => $indexAction->id,
                'edit_based' => 0,
                'created_at' => $date,
                'updated_at' => $date
            ),
            array(
                'controller_id' => $themesController->id,
                'action' => 'export',
                'inherit' => 0,
                'edit_based' => 0,
                'created_at' => $date,
                'updated_at' => $date
            )
        );

        $action_lang = array(
            array(
                'name' => 'View Uploaded Themes',
                'about' => null,
                'locale' => 'en'
            ),
            array(
                'name' => 'Export Uploaded Themes',
                'about' => null,
                'locale' => 'en'
            )
        );

        foreach ($actions as $i => $action) {
            DB::table('glob_admin_actions')->insert(array($action));
            $lastInsertId = DB::getPdo()->lastInsertId();

            $action_lang[$i]['admin_action_id'] = $lastInsertId;
            DB::table('glob_admin_action_translations')->insert( array($action_lang[$i]));

            DB::table('glob_user_roles_actions')->insert( array(
                array(
                    'role_id' => 2,
                    'action_id' => $lastInsertId,
                    'created_at' => $date,
                    'updated_at' => $date
                )
            ));
        }
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