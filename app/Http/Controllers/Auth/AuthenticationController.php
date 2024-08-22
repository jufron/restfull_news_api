<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    public function login (LoginRequest $request)
    {
        // $user = User::where('email', $request->email)->first();

        // if (! $user || ! Hash::check($request->password, $user->password)) {
        //     throw ValidationException::withMessages([
        //         'email' => ['The provided credentials are incorrect.'],
        //     ]);
        // }

        // return $user->createToken($request->email)->plainTextToken;
        return response()->json([
            'email'     => $request->email,
            'password'  => $request->password
        ]);
    }

    public function register (Request $request)
    {
        $request->validate([
            'username'              => ['required'],
            'firstName'             => ['required'],
            'lastName'              => ['required'],
            'email'                 => ['required'],
            'password'              => ['required'],
            'password_confirmation' => ['required']
        ]);

        if ($request->fails()) {
            return response()->json([
                $request->errors()
            ], 422);
        }

        User::create([
            'username'  => $request->username,
            'firstName' => $request->firstName,
            'lastName'  => $request->lastName,
            'email'     => $request->email,
            'password'  => $request->password,
        ]);

        return response()->json([
            'status'    => true
        ], 201);
    }
}
