<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_shares', function (Blueprint $table) {
            $table->increments('id');

            $table->string('share_id')->unique();
            $table->string('url');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('language_id');
            $table->text('data');
            $table->tinyInteger('is_product');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_shares');
    }
}
