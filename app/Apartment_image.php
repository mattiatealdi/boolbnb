<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment_image extends Model
{
    public function apartment(){
        return $this->belongsTo('App\Apartment');
    }
}
