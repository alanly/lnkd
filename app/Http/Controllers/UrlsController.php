<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Redirect, Request;

class UrlsController extends Controller {

	/**
	 * Display a listing of urls
	 *
	 * @return Response
	 */
	public function index()
	{
		$urls = Url::all();

		return view('urls.index', compact('urls'));
	}

	/**
	 * Show the form for creating a new url
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('urls.create');
	}

	/**
	 * Store a newly created url in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Url::create(Request::get());

		return Redirect::route('urls.index');
	}

	/**
	 * Display the specified url.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$url = Url::findOrFail($id);

		return view('urls.show', compact('url'));
	}

	/**
	 * Show the form for editing the specified url.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$url = Url::find($id);

		return view('urls.edit', compact('url'));
	}

	/**
	 * Update the specified url in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$url = Url::findOrFail($id);

		$url->update(Request::get());

		return Redirect::route('urls.index');
	}

	/**
	 * Remove the specified url from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Url::destroy($id);

		return Redirect::route('urls.index');
	}

}
