<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productImages(){
      return $this->hasMany('App\productImage','product');
    }


    public function categories(){
      return $this->belongsTo('App\category','category','id');
    }
}
