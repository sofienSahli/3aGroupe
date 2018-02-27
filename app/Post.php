<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
       'image', 'description','compagnie_id'
   ];
public function compagnie(){
  return $this->belongsTo('App\Models\Compagnie'); 
}

}
