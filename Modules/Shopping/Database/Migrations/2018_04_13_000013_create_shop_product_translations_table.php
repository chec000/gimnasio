<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProductTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'shop_product_translations';

    /**
     * Run the migrations.
     * @table shop_product_translations
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('country_product_id');
            $table->string('locale', 45);
            $table->string('name', 45);
            $table->text('shortDescription');
            $table->text('description');
            $table->text('benefits');
            $table->text('ingredients');
            $table->text('comments');
            $table->string('image', 100);
            $table->string('nutritional_table', 100);
            $table->unsignedTinyInteger('active')->default('1');
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
