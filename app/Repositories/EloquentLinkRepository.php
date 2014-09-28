<?php namespace App\Repositories;

use App\Link;
use App\Repositories\LinkRepository;

class EloquentLinkRepository implements LinkRepository {

	protected $model;

	public function __construct(Link $link)
	{
		$this->model = $link;
	}

	public function delete(Link $model)
	{
		return $model->delete();
	}

	public function getByKey($key)
	{
		return $this->model->where('key', $key)->first();
	}

	public function getByUrl($url)
	{
		return $this->model->where('url', $url)->first();
	}

	public function makeNew(array $attributes = [])
	{
		return $this->model->newInstance($attributes);
	}

	public function save($data)
	{
		if ($data instanceOf Link)
		{
			return $this->saveModel($data);
		}
		elseif (is_array($data))
		{
			return $this->saveModel($this->makeNew($data));
		}

		return false;
	}

	protected function saveModel(Link $model)
	{
		if ($model->getDirty()) return $model->save();

		return $model->touch();
	}
	
}
