<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    // Register (POST, fromdata)
    public function register (Request $request)
    {
        // data validation
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed"
        ]);

        // Create user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'passowrd' => Hash::make($request->password)
        ]);

        // Response
        return response()->json([
            'status' => true,
            'message' => 'user created successfully',
        ]);
    }

    // login (POST, fromdata)
    public function login ()
    {

    }

    // profile (GET)
    public function profile ()
    {

    }

    // refresh token (GET)
    public function refreshToken ()
    {

    }

    // logout (GET)
    public function logout ()
    {

    }
}
