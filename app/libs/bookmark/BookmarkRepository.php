<?php

abstract class BookmarkRepository
{
	public function all()
	{
		return $this->model->all();
	}

	public function find($id)
	{
		return $this->model->find($id);
	}

	public function destroy($id)
	{
		return $this->model->destroy($id);
	}

	public function create($data)
	{
		$data['rate'] = 0;

		return $this->model->create($data);
	}

	public function update($id, $data)
	{

		$bookmark = $this->find($id);
		foreach ($data as $key => $value) {
			$bookmark->$key = $value;				
		}

		return $bookmark->save();	
	}

	public function rate($id,$rate)
	{
		$bookmark = $this->find($id);
		$bookmark->rate += $rate;
		return $bookmark->save();
	}
}