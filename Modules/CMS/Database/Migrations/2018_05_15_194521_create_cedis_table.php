<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glob_cedis', function (Blueprint $table) {
            $table->increments('id');
            $table->text('address');
            $table->integer('country_id')->unsigned();
            $table->string('neighborhood', 64)->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('phone_number_01', 16);
            $table->string('phone_number_02', 16)->nullable();
            $table->string('telemarketing', 24)->nullable();
            $table->string('fax', 24)->nullable();
            $table->string('email', 128)->nullable();
            $table->string('latitude', 16);
            $table->string('longitude', 16);
            $table->string('image_01', 128);
            $table->string('image_02', 128)->nullable();
            $table->string('image_03', 128)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('delete')->default(0);
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('glob_countries');
        });

        Schema::create('glob_cedis_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->text('description')->nullable();
            $table->string('state_key', 8);
            $table->string('state_name', 64);
            $table->string('city_key', 8);
            $table->string('city_name', 64);
            $table->text('schedule');
            $table->string('banner_image', 128)->nullable();
            $table->string('banner_link', 128)->nullable();

            $table->integer('cedis_id')->unsigned();
            $table->string('locale', 20)->index();

            $table->unique(['cedis_id', 'locale'], 'ku_cedis_locale_unique');
            $table->foreign('cedis_id')->references('id')->on('glob_cedis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('glob_cedis_translations');
        Schema::dropIfExists('glob_cedis');

    }
}
