<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    
	public function user(){
		return $this->belongsTo('App\User','user_id');
	}

	public function type() {
		return $this->belongsTo('App\TrackerType','tracker_type');
	}

	public function event() {
		return $this->hasMany('App\Event','tracker_id');
	}
}
