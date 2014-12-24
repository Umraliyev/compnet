<?php

class AdminInfoController extends \BaseController {

	/**
	 * Display a listing of info
	 *
	 * @return Response
	 */
	public function index()
	{
		$info = Info::all();

		return View::make('admin.info.index', compact('info'));
	}

	/**
	 * Show the form for creating a new info
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.info.create');
	}

	/**
	 * Store a newly created info in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Info::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Info::create($data);

		return Redirect::route('admin.info.index');
	}

	/**
	 * Show the form for editing the specified admin.info.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$info = Info::find($id);

		return View::make('admin.info.edit', compact('info'));
	}

	/**
	 * Update the specified info in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$info = Info::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Info::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$info->url 	 = $data['url'];
		$info->image = $data['image'];
		$info->title = $data['title'];
		$info->text  = $data['text'];

		if ($info->save())
		{
			return Redirect::route('admin.info.index')->with('global', 'Изменения сохранены.');
		}
	}

	/**
	 * Remove the specified info from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Info::destroy($id);

		return Redirect::route('admin.info.index');
	}

}
