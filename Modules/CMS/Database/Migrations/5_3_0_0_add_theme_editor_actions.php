<?php
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;

class AddThemeEditorActions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $date = new Carbon;

      DB::table('glob_admin_actions')->insert(
          array(
              array(
                  'controller_id' => 16,
                  'action' => 'edit',
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
                    'name' => 'Edit Theme',
                    'about' => null,
                    'locale' => 'en'
                )
            )
        );


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('glob_admin_actions')->where('controller_id', '=', 16)->where('action', '=', 'edit')->delete();
    }
}
