<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoveStateAndCityKeysFromCedisTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('glob_cedis_translations', function (Blueprint $table) {
            $table->dropColumn('state_key');
            $table->dropColumn('city_key');
            $table->dropColumn('banner_link');
        });

        Schema::table('glob_cedis', function (Blueprint $table) {
            $table->string('city_key', 8)->after('country_id');
            $table->string('state_key', 8)->after('country_id');
            $table->string('banner_link', 128)->nullable()->after('image_03');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('glob_cedis', function (Blueprint $table) {
            $table->dropColumn('state_key');
            $table->dropColumn('city_key');
            $table->dropColumn('banner_link');
        });

        Schema::table('glob_cedis_translations', function (Blueprint $table) {
            $table->string('state_key', 8)->after('description');
            $table->string('city_key', 8)->after('state_name');
            $table->string('banner_link', 128)->nullable()->after('banner_image');
        });
    }
}
