<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $input = $request->validated();

        $credentials = [
            'email' => $input['email'],
            'password' => $input['password'],
        ];

        if(!$token = auth()->attempt($credentials)) {

            return response()->json(['error' =>'Unauthorized'],401);
        }

        dd('token',$token);
        return $this->respondWithToken($token);
    }
}