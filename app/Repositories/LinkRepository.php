<?php namespace App\Repositories;

use App\Link;

interface LinkRepository {

	public function delete(Link $model);
	public function getByKey($key);
	public function getByUrl($url);
	public function makeNew(array $attributes);
	public function save($data);
	
}
