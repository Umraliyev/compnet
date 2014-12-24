<?php

class AdminPagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /adminpages
	 *
	 * @return Response
	 */
	public function index()
	{
		$pages = Page::all();

		return View::make('admin.pages.index', compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /adminpages/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adminpages
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /adminpages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /adminpages/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$page = Page::find($id);

		return View::make('admin.pages.edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /adminpages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$page = Page::find($id);
		$page->meta_title = Input::get('meta_title');
		$page->meta_description = Input::get('meta_description');
		$page->text = Input::get('text');

		if ($page->save())
		{
			return Redirect::route('admin.pages.index')->with('global', 'Изменения сохранены.');
		}

		return Redirect::route('admin.pages.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /adminpages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}