<?php 

class BookmarkMongo extends Moloquent
{
	protected $connection = 'mongodb';

	protected $collection = 'bookmarks'; // require if the collection name is different from singular class name

	protected $guarded = [];

	public $timestamps = FALSE;
}