<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPurposeShopLegals extends Migration
{
    public $set_schema_table = 'shop_legals';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * ALTER TABLE `omnilife_portal_dev_db`.`shop_legals`
         * ADD COLUMN `purpose_id` TINYINT(2) NULL DEFAULT NULL COMMENT
         * 'Hace referencia a la tabla shop_confirmation_purposes' AFTER `last_modifier_id`;
         *
         * ALTER TABLE `omnilife_portal_dev_db`.`shop_legals`
        CHANGE COLUMN `purpose_id` `purpose_id` TINYINT(2) NULL DEFAULT 0 COMMENT 'Hace referencia a la tabla shop_confirmation_purposes' ;
         */
        Schema::table($this->set_schema_table, function (Blueprint $table) {
            $table->tinyInteger('purpose_id')->nullable()->after('last_modifier_id')
                ->comment('por practicidad, se hace referencia a la tabla confirmation_purposes ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->set_schema_table, function (Blueprint $table) {
            $table->dropColumn('purpose_id');
        });
    }
}
