<?php namespace App;

use App\ValidatedModel;

class Link extends ValidatedModel {

	protected $hidden   = ['id'];
	protected $fillable = ['key', 'url'];
	protected $rules    = [
		'key' => 'required|unique:links,key,<id>',
		'url' => 'required|url'
	];

	public function urlEncode($data)
	{
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}

}
