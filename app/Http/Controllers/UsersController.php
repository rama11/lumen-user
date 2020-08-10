<?php

namespace App\Http\Controllers;

use App\Users;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){

        $user = Users::find(1);
        return $user;
    }

    //
}
