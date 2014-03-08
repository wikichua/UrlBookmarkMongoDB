<?php

class HomeController extends BaseController {

	public $layout = 'bookmark.layout';

	function __construct(BookmarkRepositoryInterface $Repo) {
		$this->Repo = $Repo;

		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	public function index()
	{
		$bookmarks = $this->Repo->all();

		$this->layout->content = View::make('bookmark.index')
			->with(compact('bookmarks'));
	}

	public function show($id)
	{
		$bookmark = $this->Repo->find($id);

		$this->layout->content = View::make('bookmark.show')
			->with(compact('bookmark'));
	}

	public function create()
	{
		$this->layout->content = View::make('bookmark.create');
	}

	public function edit($id)
	{
		$bookmark = $this->Repo->find($id);
		$this->layout->content = View::make('bookmark.edit')
			->with(compact('bookmark'));
	}

	public function store()
	{
		$data = Input::all();

		return $this->Repo->create($data)? Redirect::route('bookmark.index'):'Something Wrong!';
	}

	public function update($id)
	{
		$data = Input::all();

		return $this->Repo->update($id,$data)? Redirect::route('bookmark.index'):'Something Wrong!';
	}

	public function destroy($id)
	{
		return $this->Repo->destroy($id)? Redirect::route('bookmark.index'):'Something Wrong!';
	}

	public function rate($id,$rate)
	{
		return $this->Repo->rate($id,$rate)? Redirect::route('bookmark.index'):'Something Wrong!';
	}

}