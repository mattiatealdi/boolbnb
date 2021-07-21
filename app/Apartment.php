<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function apartment_images(){
        return $this->hasMany('App\Apartment_image');
    }

    public function requests(){
        return $this->hasMany('App\Request');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }
    
    public function categories(){
        return $this->hasMany('App\Category');
    }

    public function views(){
        return $this->hasMany('App\View');
    }

    public function services(){
        return $this->belongsToMany('App\Service');
    }

    public function sponsors(){
        return $this->belongsToMany('App\Sponsor');
    }
}
