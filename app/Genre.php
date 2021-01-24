<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  
    public function content(){
      return $this->hasMany('App\Content','genres_id');
    }
      protected $primaryKey = 'genres_id';
      
     public function getLists()
{
    $genres = Genre::orderBy('id','asc')->pluck('name', 'id');
  
    return $genres;
} 
}
