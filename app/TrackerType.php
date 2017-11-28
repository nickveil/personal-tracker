<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackerType extends Model
{
    public function trackerType(){
    	return $this->hasMany('App\Tracker','tracker_type');
    }
}
