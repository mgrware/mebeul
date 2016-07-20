<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
     public $fillable = [
     'name',
     'filepath',
     'product_id'
     ];

     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
