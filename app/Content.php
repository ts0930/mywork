<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
      protected $table='contents';
      protected $fillable=[
        'title',
        'bodies',
        'genres_id',
        'image',
        'url'
        ];
    public function genre(){
      return $this->belongsTo('App\Genre');
    }
     
    
    public function user(){
      return $this->belongsTo('App\Player');
    }

}