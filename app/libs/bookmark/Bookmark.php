<?php

class Bookmark extends BookmarkRepository implements BookmarkRepositoryInterface
{
	protected $model;

	function __construct($model) {
		$this->model = $model;
	}

}