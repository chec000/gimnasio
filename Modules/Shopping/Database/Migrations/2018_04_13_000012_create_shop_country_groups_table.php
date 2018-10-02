<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopCountryGroupsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'shop_country_groups';

    /**
     * Run the migrations.
     * @table shop_country_groups
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('group_id');
            $table->string('code', 45);
            $table->string('color', 45);
            $table->string('link_banner', 100);
            $table->string('link_banner_two', 100);
            $table->unsignedInteger('product_id_featured');
            $table->double('price')->nullable()->default(null);
            $table->unsignedInteger('points')->nullable()->default(null);
            $table->tinyInteger('active')->default('1');
            $table->unsignedInteger('last_modifier_id')->nullable();
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
       Schema::dropIfExists($this->set_schema_table);
     }
}
