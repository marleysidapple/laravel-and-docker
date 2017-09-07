<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Respone;
use App\Repositories\User\UserInterface;

class UserController extends Controller
{

    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->user->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findById = $this->user->findById($id);
        return response()->json($findById);
    }


    // an example how a repository pattern could be used for passing the relation
    public function showWithId($id)
    {
        $user = $this->user->find($id, ['address']);
        return response()->json($user);
    }


}
