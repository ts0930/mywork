<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function genre(){
      return $this->belongsTo('App\Genre');
    }
      
      protected $fillable=[
        'title',
        'bodies',
        'genres_id'
        ];
    
    public function user(){
      return $this->belongsTo('App\Player');
    }

}