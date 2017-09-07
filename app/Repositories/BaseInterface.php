<?php 

namespace App\Repositories;

interface BaseInterface {

	public function all();

	public function findById($id);

	public function find($id, $relations=array());

	/*
	public function paginate($count);

	public function findBy($field, $value);

	public function store($data);

	public function update($id, $data);

	public function delete($id);
	*/
}