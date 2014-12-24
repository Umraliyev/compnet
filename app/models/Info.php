<?php

class Info extends \Eloquent {

	protected $table = 'info_blocks';

	// Add your validation rules here
	public static $rules = [
		'url' => 'required|min:3|max:25',
		'title' => 'required|min:3|max:25',
		'image' => 'required|min:10',
		'text' => 'required|min:100'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}