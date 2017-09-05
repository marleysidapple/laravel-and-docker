<?php
namespace App\Repositories\User;
use App\Repositories\BaseRepository;
use App\User;


class UserRepository extends BaseRepository implements UserInterface {

	protected $modelName = "App\User";
}