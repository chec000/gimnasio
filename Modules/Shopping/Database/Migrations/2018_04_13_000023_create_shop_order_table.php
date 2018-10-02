<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopOrdersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'shop_order';

    /**
     * Run the migrations.
     * @table shop_orders
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
            $table->string('distributor_number', 15);
            $table->string('order_number', 8);
            $table->unsignedInteger('points');
            $table->double('total_taxes');
            $table->double('total');
            $table->unsignedSmallInteger('discount')->nullable()->default('0');
            $table->string('shipping_company', 15);
            $table->string('guide_number', 30)->default('');
            $table->string('corbiz_order_number', 30);
            $table->string('bank_transaction',100);
            $table->string('bank_status',40);
            $table->string('bank_authorization',100);
            $table->string('card_type',40);
            $table->unsignedInteger('payment_type');
            $table->string('payment_brand',30);
            $table->string('bank_transaction',100);
            $table->unsignedInteger('corbiz_payment_key')->nullable();
            $table->enum('shop_type', ['Venta', 'Inscripcion']);
            $table->mediumText('error_corbiz')->nullable()->default(null);
            $table->mediumText('error_user')->nullable()->default(null);
            $table->string('corbiz_transaction', 40)->nullable()->default(null);
            $table->string('warehouse', 30)->nullable()->default(null);
            $table->double('management')->nullable()->default('0');
            $table->unsignedTinyInteger('attempts')->nullable()->default(null);
            $table->unsignedTinyInteger('change_period')->nullable()->default('0');
            $table->unsignedInteger('order_status_id');
            $table->string('contract_path', 100)->nullable()->default(null);
            $table->string('is_mobile', 30)->nullable()->default(null);
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
