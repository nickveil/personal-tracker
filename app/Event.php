<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function trackerEvent() {
    	return $this->belongsTo('App\Tracker','tracker_id');
    }
}
