<?php

namespace App\Http\Controllers;

use App\Model\UserList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserListController extends Controller
{
    public function getUserList()
    {
        $users = UserList::all();
        return view('app', ['data' => $users]);
    }

    public function getBrgyList()
    {
        $brgy = DB::table('barangay')->get();
        // return response()->json($brgy);
        return view('app', ['data' => $brgy]);
    }

    public function signup()
    {
        $logs = DB::table('smslogs')->get();
        // return response()->json($logs);
        return view('app', ['data' => $logs]);
    }

    public function formlist()
    {
        $list = DB::table('userinformation')->get();
        // return response()->json($list);
        return view('app', ['data' => $list]);
    }

    public function get_users_api()
    {
        $users = UserList::all();

        return $users;

    }
}
