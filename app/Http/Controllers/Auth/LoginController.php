<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request) {
        //validation on fields Login
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    
        // check email
        $user = User::where('email', $fields['email'])->first();
    
        // check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad credentials'
            ], 401);
        }
    
        $token = $user->createToken('myapptoken')->plainTextToken;
        $user->token = $token;
        $repsonse = [
            'user' => $user,
            'token' => $token,
            'code' => "log_success",
            'message' => "Login success"
            
        ];

        return response($repsonse, 201);
    }


    public function user(Request $request)
    {
        return auth()->user();
    }

}
