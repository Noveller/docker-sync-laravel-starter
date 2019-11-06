<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
   public function register(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $validateData['password'] = bcrypt($request->password);

        $user = User::create($validateData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response([
            'user' => $user,
            'accessToken' => $accessToken
        ]);
   }

   public function login(Request $request) {
        $loginData = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if(!\Auth::attempt($loginData)) {
            return response(['message' => 'Invalid credentials'], 401);
        }

        $accessToken = \Auth::user()->createToken('authToken')->accessToken;

        return response(['user' => auth()->user(), 'access_token' => $accessToken]);

   }
}
