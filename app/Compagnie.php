<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compagnie extends Model
{
     protected $fillable = [
          'name', 'description', 'gerant','emailGerant'
      ];

      public function posts(){
        return $this->hasMany('App\Post');
      }
}
