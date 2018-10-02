<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueConstrainDistributorsPoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_distributors_pool', function (Blueprint $table) {
            $table->unique(['distributor_code', 'country_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_distributors_pool', function (Blueprint $table) {
            //$table->dropUnique('unique_code_country');
        });
    }
}
