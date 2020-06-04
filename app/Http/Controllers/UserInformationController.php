<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserInformation;
use Illuminate\Support\Facades\DB;

class UserInformationController extends Controller
{
    public function get_user_info()
    {
        $users = UserInformation::all();
        return view('app', ['data' => $users]);
    }
}
