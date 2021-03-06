<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    public $timestamps = true; 
     protected $fillable  = [
         'name'
     ]; 
     public function products(){
        return $this->hasMany('App\Product'); 
    }
}
