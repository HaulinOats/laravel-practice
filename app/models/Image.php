<?php

class Image extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'images';

	public static $rules = array();

	public function user() {
      return $this->belongsTo('User');
   }
}