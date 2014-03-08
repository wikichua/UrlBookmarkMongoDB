<?php

interface BookmarkRepositoryInterface
{
	public function all();

	public function find($id);

	public function destroy($id);

	public function create($data);

	public function update($id, $data);

}