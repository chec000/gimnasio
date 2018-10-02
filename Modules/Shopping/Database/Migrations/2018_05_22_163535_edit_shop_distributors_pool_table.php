<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditShopDistributorsPoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_distributors_pool', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->unsignedInteger('order')->default(0)->change();
            $table->renameColumn('order', 'used');
            $table->string('distributor_email')->after('distributor_code');
            $table->string('distributor_name')->after('distributor_code');
            $table->dropColumn('active');
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
            $table->unsignedTinyInteger('active')->default('1');
            $table->dropColumn('distributor_name');
            $table->dropColumn('distributor_email');
            $table->renameColumn('used', 'order');
            $table->unsignedInteger('used')->default(NULL)->change();
            $table->increments('id');
        });
    }
}
