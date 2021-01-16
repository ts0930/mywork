<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function content(){
      return $this->hasMany('App\Content');
    }
    
}
