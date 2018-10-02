<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);

        Schema::create('glob_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_brand_id', 45)->default('0');
            $table->string('domain');
            $table->boolean('is_main')->default(0);
            //$table->boolean('is_dependent')->default(0);
            $table->string('favicon')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::table('glob_brand_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('brand_id');
            $table->string('name');
            $table->string('alias');
            $table->string('logo')->nullable();
            $table->string('locale',20)->index();

            $table->unique(['brand_id','locale'], 'ku_brand_locale_unique');
            $table->foreign('brand_id','fk_bt_brands')->references('id')->on('glob_brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('glob_brands');
    }
}
