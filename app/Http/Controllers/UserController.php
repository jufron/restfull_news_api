<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserDetailResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        $user = User::query()->latest()->get();
        return UserResource::collection($user);
    }

    public function show ($id)
    {
        $user = User::findOrFail($id)->load('posts');
        return new UserDetailResource($user);
    }
}
