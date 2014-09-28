<?php namespace App;

use App\LinkCreationObserver;
use App\Repositories\LinkRepository;

use Request;

class LinkCreator {

	protected $links;

	public function __construct(LinkRepository $links)
	{
		$this->links = $links;
	}

	public function create(LinkCreationObserver $observer, $url)
	{
		// Check if the link is already in the database.
		if ($link = $this->links->getByUrl($url))
		{
			return $observer->linkCreated($link);
		}

		// Create initial instance.
		$link = $this->links->makeNew();
		$link->url = $url;
		$link->creator = Request::server('REMOTE_ADDR');

		if (! $this->links->save($link))
		{
			return $observer->linkValidationError($link->getErrors());
		}
		
		// Use the ID field to set our url key.
		$link->key = $link->urlEncode($link->id);

		if (! $this->links->save($link))
		{
			return $observer->linkValidationError($link->getErrors());
		}

		return $observer->linkCreated($link);
	}
	
}
