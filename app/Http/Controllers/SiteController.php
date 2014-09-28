<?php namespace App\Http\Controllers;

use App\Link;
use App\LinkCreationObserver;
use App\Repositories\LinkRepository;

use Illuminate\Routing\Controller;
use App, Input, Redirect;

class SiteController extends Controller implements LinkCreationObserver {

	protected $links;

	public function __construct(LinkRepository $links)
	{
		$this->links = $links;
	}

	public function loadHome()
	{
		return "Lnkd";
	}

	public function loadLink($key)
	{
		$link = $this->links->getByKey($key);

		if (! $link) return App::abort(404);

		// Increment the counter
		$link->count = $link->count + 1;
		$this->links->save($link);

		return Redirect::to($link->url);
	}

	public function addLink()
	{
		$url = Input::get('url');

		if (! $url) return Redirect::to('/');

		$creator = App::make('App\LinkCreator');

		return $creator->create($this, $url);
	}

	public function linkCreated(Link $link)
	{
		return $link->toJson();
	}

	public function linkValidationError($errors)
	{
		return $errors->toJson();
	}
	
}
