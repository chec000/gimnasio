<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockSelectopts extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_block_selectopts', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('block_id');
            $table->enum('type', ['text', 'icon']);
            $table->integer('brand_id')->nulleable();
            $table->integer('country_id')->nulleable();
            $table->string('option');
            $table->string('value');
            $table->string('locale',20)->index();
            $table->integer('active')->default(1);
            $table->timestamps();

            //$table->unique(['block_id','locale'],'cbs_blockselect_locale_unique');
            //$table->foreign('block_id','fk_cbs_blocks')->references('id')->on('cms_blocks');
            //$table->foreign('brand_id','fk_cbs_brands')->references('id')->on('glob_brands');
            //$table->foreign('country_id','fk_cbs_countries')->references('id')->on('glob_countries');
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