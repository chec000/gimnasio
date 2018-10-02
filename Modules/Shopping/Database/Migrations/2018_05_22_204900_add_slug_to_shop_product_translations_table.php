<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToShopProductTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_product_translations', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('comments');
        });

        Schema::table('shop_products', function (Blueprint $table) {
            $table->tinyInteger('delete')->default(0);
        });

        Schema::table('shop_country_products', function (Blueprint $table) {
            $table->tinyInteger('delete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_country_products', function (Blueprint $table) {
            $table->dropColumn('delete');
        });

        Schema::table('shop_products', function (Blueprint $table) {
            $table->dropColumn('delete');
        });

        Schema::table('shop_product_translations', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
