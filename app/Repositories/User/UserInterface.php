<?php

namespace App\Repositories\User;

interface UserInterface{
	
	public function all();

	public function findById($id);

}