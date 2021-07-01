<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;




class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' =>'required|email|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'username' => $fields['username'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;
        $user->token = $token;
        $repsonse = [
            'user' => $user,
            'token' => $token,
            'message'=> "login is successful",
            'code' => "reg_success",
        ];

        return response($repsonse, 201);

        // return $user->createToken(request('device_name'))->plainTextToken;
      
    }
}