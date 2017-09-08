<?php
namespace App\Repositories;

class BaseRepository {

	protected $modelName;

	public function all()
	{
		$instance = $this->getNewInstance();
		return $instance->all();
	}


	public function allWithRelation($relations = array())
	{
		$instance = $this->getNewInstance();
		return $instance->with($relations)->get();
	}

	//for relation
	
	public function find($id, $relations = array())
	{
		$instance = $this->getNewInstance();
		return $instance->with($relations)->find($id);
	}
	

	public function findById($id)
	{
		$instance = $this->getNewInstance();
		return $instance->find($id);
	}

	protected function getNewInstance()
	{
		$model = $this->modelName;
		return new $model;
	}
}