<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lol_Profile extends Model {

	//
	protected $table = 'lol_profile';

	public $timestamps = false;

	public function users(){
		return $this->belongsTo('App\User','id','twitter_id');
	}
}
