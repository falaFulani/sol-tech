<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = [
      'supplier_id', 'order_id',  'name', 'description', 'quanity'
    ]; 
    public function order(){
        return $this->belongsTo('App\Order');
    }
    public function supplier(){
        return $this->belongTO('App\Supplier'); 
    }
}
