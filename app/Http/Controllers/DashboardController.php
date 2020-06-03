<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $brgy = DB::table('barangay')->get();

        return view('app', ['data' => $brgy ]);
    }

    public function header()
    {
        return view('app', ['data' => []]);
    }
}
