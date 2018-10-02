<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagePublishRequests extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_publish_requests', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('page_version_id');
            $table->enum('status', ['awaiting', 'approved', 'denied', 'cancelled']);
            $table->unsignedInteger('user_id');
            $table->text('note');
            $table->integer('mod_id');
            $table->timestamps();

            //$table->foreign('page_version_id','fk_cppr_pversions')->references('id')->on('cms_page_versions');
            //$table->foreign('user_id','fk_cppr_users')->references('id')->on('glob_users');
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