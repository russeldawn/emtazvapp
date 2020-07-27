<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Guzzle\CLient;

class AuthController extends Controller
{

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

        $token = $user->createToken($user->userid);
		$expires_at = strtotime($token->token->expires_at);

        // Format the final response in a desirable format
        return response()->json([
            'token_type' => 'Bearer',
            'expires_at' => $expires_at,
            'token' => $token->accessToken,
            'status' => 200
        ]);

	}

    public function logout() {
        $user = Auth::User();
        $tokenId = $user->token()->id;

        $tokenRepository = app('Laravel\Passport\TokenRepository');
        $refreshTokenRepository = app('Laravel\Passport\RefreshTokenRepository');

        // Revoke an access token...
        $tokenRepository->revokeAccessToken($tokenId);

        // Revoke all of the token's refresh tokens...
        $refreshTokenRepository->revokeRefreshTokensByAccessTokenId($tokenId);

        return response()->json([
			'status' => 202,
			'message' => 'Successfully logged-out from account.'
		], 202);
    }


	public function me()
	{
		$user = Auth::user();

		$response = [
			'status' => 200,
			'data'   => [
				'user' => $user
			]
		];

        return response()->json($response);
	}


}
