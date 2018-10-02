<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopShippingAddressTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'shop_shipping_address';

    /**
     * Run the migrations.
     * @table shop_shipping_address
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
            $table->string('sponsor', 20)->nullable()->default(null);
            $table->string('sponsor_name', 50)->nullable()->default(null);
            $table->string('sponsor_email', 50)->nullable()->default(null);
            $table->string('eo_number', 20);
            $table->string('password', 4)->nullable()->default(null);
            $table->string('eo_name', 50)->nullable()->default(null);
            $table->string('eo_lastname', 100)->nullable()->default(null);
            $table->string('type', 15);
            $table->unsignedInteger('folio');
            $table->text('address');
            $table->unsignedInteger('number');
            $table->string('cpf',30);
            $table->text('complement')->nullable()->default(null);
            $table->string('suburb', 50);
            $table->string('zip_code', 15);
            $table->string('city', 10);
            $table->string('city_name', 25);
            $table->string('state', 25);
            $table->string('county', 25);
            $table->string('country_key', 10);
            $table->string('email', 30);
            $table->string('telephone', 15);
            $table->string('cellphone', 15);
            $table->string('gender', 10)->nullable()->default(null);
            $table->unsignedInteger('security_question_id')->nullable();
            $table->text('answer')->nullable()->default(null);
            $table->string('kit_type', 45)->nullable()->default(null);
            $table->unsignedInteger('order_document_id')->nullable();
            $table->date('birthdate')->nullable()->default(null);
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
