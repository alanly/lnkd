<?php namespace App;

interface LinkCreationObserver {

	public function linkCreated(Link $link);
	public function linkValidationError($errors);
	
}
