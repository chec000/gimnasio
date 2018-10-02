<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopOrderDetailTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'shop_order_detail';

    /**
     * Run the migrations.
     * @table shop_order_detail
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('promo_product_id');
            $table->unsignedInteger('quantity');
            $table->double('final_price');
            $table->unsignedInteger('points');
            $table->integer('active');
            $table->unsignedTinyInteger('is_promo');
            $table->string('promo_type',1);
            $table->string('promo_code',45);
            $table->string('promo_product_name',45);
            $table->double('tax_percentage');
            $table->string('tax_currency',20);
            $table->double('tax_amount');
            $table->unsignedInteger('country_group_id')->nullable();
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
