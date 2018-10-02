<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRolesPageActions extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_user_roles_page_actions', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('page_id');
            $table->unsignedInteger('action_id');
            $table->enum('access', array('allow', 'deny'));
            $table->timestamps();

            //$table->foreign('role_id','fk_curpa_roles')->references('id')->on('glob_user_roles');
            //$table->foreign('page_id','fk_curpa_pages')->references('id')->on('cms_pages');
            //$table->foreign('action_id','fk_curpa_actions')->references('id')->on('glob_admin_actions');
        });
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