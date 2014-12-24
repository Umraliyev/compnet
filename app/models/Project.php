<?php

class Project extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required|min:3',
		'link' 	=> 'required|min:3|max:50',
	];

	// Don't forget to fill this array
	protected $fillable = [];

}