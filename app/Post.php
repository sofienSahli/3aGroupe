<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
       'image', 'description','compagnie_id','title'
   ];
public function compagnie(){
  return $this->belongsTo('App\Models\Compagnie');
}
/**
   * Set the post's image.
   *
   * @param  string  $value
   * @return void
   */
public function setImagePath($value)
 {
     $this->attributes['image'] = strtolower($value);
 }

}
