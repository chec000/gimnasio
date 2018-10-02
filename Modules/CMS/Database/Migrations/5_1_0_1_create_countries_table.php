<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glob_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_key', 15); //MX
            $table->string('corbiz_key', 15);
            $table->string('default_locale', 7);
            $table->string('currency_key', 4)->nullable();
            $table->string('timezone', 100);
            $table->string('webservice', 255);
            $table->boolean('shopping_active')->default(1);
            $table->boolean('inscription_active')->default(1);
            $table->string('flag')->nullable();
            $table->boolean('active')->default(1);

            $table->timestamps();
        });

        Schema::table('glob_country_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->string('name');
            $table->string('locale',20)->index();

            $table->unique(['country_id','locale'], 'gct_country_locale_unique');
            $table->foreign('country_id','fk_gct_countries')->references('id')->on('glob_countries')->onDelete('cascade');
        });

        Schema::table('glob_country_languages', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('language_id');
            $table->integer('active')->default(1);

            $table->foreign('country_id','fk_gcl_countries')->references('id')->on('glob_countries');
            $table->foreign('language_id','fk_gcl_lang')->references('id')->on('glob_languages');
        });

        Schema::table('glob_brand_countries', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('country_id');
            $table->integer('active')->default(1);

            $table->foreign('brand_id','fk_gbc_brands')->references('id')->on('glob_brands');
            $table->foreign('country_id','fk_gbc_countries')->references('id')->on('glob_countries');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('glob_countries');
        Schema::dropIfExists('glob_country_translations');
        Schema::dropIfExists('glob_country_languages');
    }
}
