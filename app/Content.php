<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function genre(){
      return $this->belongsTo('App/Genre');
    }
      
      protected $guarded = array('id');
      
        public static $promise = array(
        'title' => 'required',
        'bodies' => 'required',
        'url'=>'required',
    );
    

}