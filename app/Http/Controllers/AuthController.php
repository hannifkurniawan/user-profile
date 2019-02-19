<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use JWTAuth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string', 'max:14', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*\d)(?=.*[a-zA-Z]).[^\s]{8,}$/', 'confirmed'],
        ];

        $messages = [
            'password.regex' => 'Password must be minimun of 8 character combination letter and number.',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {    
            return response()->json( [
                'status' => 'error',
                'message' => $validator->messages()
            ], 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => bcrypt($request->password),
        ]);

        return response()->json([
            'status' => 'success', 
            'message' => 'Register success'
        ], 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $rules = [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*\d)(?=.*[a-zA-Z]).[^\s]{8,}$/'],
        ];

        $messages = [
            'password.regex' => 'Password must be minimun of 8 character combination letter and number.',
        ];

        $validator = Validator::make($credentials, $rules, $messages);
        if($validator->fails()) {
            return response()->json([
                'status' => 'error', 
                'message' => $validator->messages()
            ], 400);
        }

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'status' => 'error', 
                    'message' => 'We can`t find an account with this credentials.'
                ], 401);
            }
        } catch (JWTException $e) {
            return response()->json([
                'status' => 'error', 
                'message' => 'Failed to login, please try again.'
            ], 500);
        }
        // dd($token);
        $currentUser = JWTAuth::user();

        return response()->json([
            'status' => 'success',
            'message' => 'Login success',
            'data'=> [
                'token' => $token,
                'user' => $currentUser
            ]
        ]);
    }

    public function logout()
    {
        $logout = JWTAuth::invalidate(JWTAuth::getToken());
        
        return response([
            'status' => 'success',
            'message' => 'Logged out Successfully.'
        ], 200);
    }

}
