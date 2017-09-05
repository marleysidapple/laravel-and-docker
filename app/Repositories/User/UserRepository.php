<?php
namespace App\Repositories\User;
use App\User;


class UserRepository implements UserInterface {

	public function all()
	{
		return User::all();
	}

	public function findById($id)
	{
		return User::findOrFail($id);
	}
}