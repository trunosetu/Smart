<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSensor extends Model
{
    use HasFactory;

        /**
     *@var bool
     */


     public $timestamps = true;

     /**
      * @var array
      */
    protected $fillable = ['device_id','temperature','humidity','lux'];
}
