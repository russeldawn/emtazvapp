<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserListController extends Controller
{

	/**
	 * Get All Users
	 *
	 * @param void
	 * @return \Illuminate\Http\Response
	 */
    public function get_users_api()
    {
        $users = User::all();

        return response()->json($users);

	}

}
