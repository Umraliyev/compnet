<?php

class IndexController extends BaseController {

	protected $pages;

	public function __construct(Page $pages)
	{
		$this->pages = $pages;
	}

	public function index()
	{
		$page = $this->pages->find(1);
		$info_blocks = Info::all();

		return View::make('pages.index', compact('page', 'info_blocks'));
	}

	public function compnet()
	{
		$page = $this->pages->find(2);

		return View::make('pages.compnet', compact('page'));
	}

	public function portfolio()
	{
		$page = $this->pages->find(3);
		$projects = Project::all();

		return View::make('pages.portfolio', compact('page', 'projects'));
	}

	public function services($service = 'it-outsourcing')
	{
		$page = $this->pages->find(4);
		$info = View::make('pages.services.'.$service);

		return View::make('pages.services', compact('page', 'info'));
	}

	public function showService()
	{
		if (Request::ajax())
		{
			$word = $_POST['service'];
			$info = Info::where('url', "{$word}")->first();

			return View::make('pages.services.'.$info->url);
		}
	}

	public function partners()
	{
		$page = $this->pages->find(5);

		return View::make('pages.partners', compact('page'));
	}

	public function contacts()
	{
		$page = $this->pages->find(6);

		return View::make('pages.contacts', compact('page'));
	}
}
