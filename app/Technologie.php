<?php

namespace WebPro;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technologie extends Model
{
        use SoftDeletes;

    //
        protected $dates = ['deleted_at'];

    
    public function user(){
        return $this->belongsTo('WebPro\User');
    } 
    public function experiences(){
        return $this->hasMany('WebPro\Experience');
    } 
    public function formations(){
        return $this->hasMany('WebPro\Formation');
    }
}
