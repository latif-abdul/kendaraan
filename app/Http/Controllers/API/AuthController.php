<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:55',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors()]);
        }

        $user = New User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $accessToken = $user->createToken('authToken')->accessToken;

        return response([ 'user' => $user, 'access_token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $data = $request->only(["email", "password"]);

        $validator = Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if($validator->fails()){
            return response(['error' => $validator->errors()]);
        }

        if (!auth()->attempt($data)) {
            return response(['message' => 'Login credentials are invaild']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['access_token' => $accessToken]);

    }
}
