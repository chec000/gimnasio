<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePages extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_pages', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->string('code')->nullable();
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('template')->default(0);
            $table->integer('parent')->default(0);
            $table->integer('child_template')->default(0);
            $table->integer('order')->default(0);
            $table->integer('group_container')->default(0);
            $table->integer('in_group')->default(0);
            $table->integer('link')->default(0);
            $table->integer('live')->default(1);
            $table->timestamp('live_start')->nullable();
            $table->timestamp('live_end')->nullable();
            $table->timestamps();

            $table->foreign('brand_id','fk_cp_brands')->references('id')->on('glob_brands');
            $table->foreign('country_id','fk_cp_countries')->references('id')->on('glob_countries');

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