<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  public function content(){
      return $this->hasMany('App\Content','users_id');
  }
  
}
