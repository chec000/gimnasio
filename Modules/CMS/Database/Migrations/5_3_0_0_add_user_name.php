<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Modules\CMS\Entities\Page;
use Carbon\Carbon;

class AddUserName extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('glob_users', function (Blueprint $table) {
            $table->string('name')->nullable()->after('email');
        });

        $date = new Carbon;

        $controller = DB::table('glob_admin_controllers')->select('id')->where('controller', '=', 'account')->first();
        DB::table('glob_admin_actions')->insert(
            array(
                array(
                    'controller_id' => $controller->id,
                    'action' => 'name',
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
                    'name' => 'Set Alias',
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
        Schema::table('glob_users', function (Blueprint $table) {
            $table->dropColumn('name');
        });

        $controller = DB::table('glob_admin_controllers')->select('id')->where('controller', '=', 'account')->first();
        DB::table('glob_admin_actions')->where('controller_id', '=', $controller->id)->where('action', '=', 'name')->delete();
    }

}
