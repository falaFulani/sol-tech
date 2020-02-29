<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = true; 
     protected $fillable  = [
         'order_number'
     ]; 
     public function products(){
         return $this->hasMany('App\Product'); 
     }
}
