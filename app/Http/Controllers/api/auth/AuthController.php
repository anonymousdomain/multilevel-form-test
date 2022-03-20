<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        //validate 
        $attributes = $this->validate($request, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => ['required', 'string', 'max:14', 'min:10'],
            'usersex' => ['required', 'string'],
            'password' => 'required|confirmed|min:8',
        ]);
        //store
        $attributes['password'] = bcrypt($attributes['password']); //hash the password
        $user = User::create($attributes);

        $token = $user->createToken('authToken')->plainTextToken;

        return response(['user' => $user, 'token' => $token], 201);
    }

    public function logout(Request $request)
    {

        $request->user()->tokens()->delete();
        return response(['message' => 'logged out successfully']);
    }

    public function login(Request $request)
    {
        $attr = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $attr['email'])->first();

        if (!$user || !hash::check($attr['password'], $user->password)) {
            return response(['message' => 'invalid credential'], 401);
        }


        $token = $user->createToken('authToken')->plainTextToken;
        return  response(['user' => $user, 'token' => $token]);
    }
}
