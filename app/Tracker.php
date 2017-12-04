<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Tracker extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
	// public function trackuser(){
	// 	return $this->belongsTo('App\User','user_id');
	// }

	// public function type() {
	// 	return $this->belongsTo('App\TrackerType','tracker_type');
	// }

	// public function event() {
	// 	return $this->hasMany('App\Event','tracker_id');
	// }

	// // public function trackId(){
	// // 	return $this->belongsTo('App\User','id');
	// // }


}
