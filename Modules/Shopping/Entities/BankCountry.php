<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Modules\Shopping\Entities;
use Eloquent;
/**

 *
 * @author Alan
 */
class BankCountry extends Eloquent{
    //put your code here
    //  use Translatable;
    public $timestamps = false;
    protected $fillable = ['banks_id','country_id','active'];

    protected $table = 'shop_bank_countries';
    
      public function country()
    {
        return $this->belongsTo('Modules\Admin\Entities\Country');
    }
    public function banks()
    {
        return $this->belongsTo('Modules\Shopping\Entities\Bank','id','banks_id');
    }


}