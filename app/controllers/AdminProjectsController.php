<?php

class AdminProjectsController extends \BaseController {

	/**
	 * Display a listing of projects
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();

		return View::make('admin.projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new project
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.projects.create');
	}

	/**
	 * Store a newly created project in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Project::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (Input::hasFile('image'))
		{
			$imageName = Input::file('image')->getClientOriginalName();
			$imageFile = Image::make(Input::file('image')->getRealPath());
			$imageFile->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			});
			$imageFile->crop(400, 300);
			$imageFile->save(public_path().'/img/projects/'.$imageName);
		}
		else
		{
			$imageName = 'no-image.png';
		}

		$project = new Project;
		$project->image = $imageName;
		$project->title = $data['title'];
		$project->description = $data['description'];
		$project->link = $data['link'];

		if ($project->save())
		{
			return Redirect::route('admin.projects.index')->with('global', 'Новый проект добавлен.');
		}
	}

	/**
	 * Display the specified project.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::findOrFail($id);

		return View::make('admin.projects.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified project.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::find($id);

		return View::make('admin.projects.edit', compact('project'));
	}

	/**
	 * Update the specified project in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$project = Project::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Project::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (Input::hasFile('image'))
		{
			if (Input::get('imageName') != 'no-image.png')
			{
				unlink(public_path().'/img/projects/'.Input::get('imageName'));
			}

			$imageName = Input::file('image')->getClientOriginalName();
			$imageFile = Image::make(Input::file('image')->getRealPath());
			$imageFile->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			});
			$imageFile->crop(400, 300);
			$imageFile->save(public_path().'/img/projects/'.$imageName);
		}
		else
		{
			$imageName = Input::get('imageName');
		}

		$project->image = $imageName;
		$project->title = $data['title'];
		$project->description = $data['description'];
		$project->link = $data['link'];

		if ($project->save())
		{
			return Redirect::route('admin.projects.index')->with('global', 'Проект изменен.');
		}
	}

	/**
	 * Remove the specified project from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$project = Project::find($id);

		if ($project->image != 'no-image.png')
		{
			unlink(public_path().'/img/projects/'.$project->image);
		}

		$project->delete();

		return Redirect::route('admin.projects.index')->with('global', 'Запись удалена.');
	}

}
