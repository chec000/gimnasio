<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplates extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_templates', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('brand_id');
            $table->string('template');
            $table->integer('child_template')->default(0);
            $table->integer('hidden')->default(0);
            $table->boolean('active')->default(1);
            $table->timestamps();

            //$table->foreign('brand_id','fk_ct_brands')->references('id')->on('glob_brands');
        });

        Schema::table('cms_template_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('template_id');
            $table->string('label');
            $table->string('locale',20)->index();

            $table->unique(['template_id','locale'], 'ku_template_locale_unique');
            $table->foreign('template_id','fk_ctt_templates')->references('id')->on('cms_templates')->onDelete('cascade');
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