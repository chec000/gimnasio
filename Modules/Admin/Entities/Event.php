<?php


namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
 protected $fillable = ['title','start_date','end_date'];
 
}