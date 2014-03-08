<?php 

class BookmarkMysql extends Eloquent
{
	protected $connection = 'mysql';

	protected $table = 'bookmarks'; // require if the collection name is different from singular class name

	protected $guarded = [];

	public $timestamps = FALSE;

	public static $key = '_id';
}