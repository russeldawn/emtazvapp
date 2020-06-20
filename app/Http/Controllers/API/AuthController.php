<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request)
    {

        $user = User::where('userid', $request->username)->first();

        if (!$user) {
            return response()->json([
                'message' => 'Wrong username or password',
                'status' => 401
            ], 401);
        }

        // If a user with the email was found - check if the specified password
        // belongs to this user
        if (!Hash::check($request->password, $user->userpassword)) {
            return response()->json([
                'message' => 'Wrong username or password',
                'status' => 401
            ], 401);
        }

        $token = $user->createToken($user->emailaddress);
        $expires_in = strtotime($token->token->expires_at);
        // Format the final response in a desirable format
        return response()->json([
            'token_type' => 'Bearer',
            'expires_in' => $expires_in,
            'token' => $token->accessToken,
            // 'user' => $user,
            'status' => 200
        ]);

    }
}
