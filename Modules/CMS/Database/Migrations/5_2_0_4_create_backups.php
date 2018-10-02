<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBackups extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_backups', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('log_id');
            $table->integer('primary_id');
            $table->string('model');
            $table->mediumText('data');
            $table->timestamps();

            $table->foreign('log_id','fk_cb_logs')->references('id')->on('cms_admin_logs');
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