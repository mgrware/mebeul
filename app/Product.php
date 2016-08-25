<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

     public $fillable = [
      'title',
      'description',
      'category_id',
      'user_id',
      'slug',
      'color',
      'size',
      'material'
     ];

      public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function images()
    {
      return $this->hasMany('App\Image');
    }



}
