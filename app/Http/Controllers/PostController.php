<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        return response()->json([
            'data' => [
                [
                    'id' => 1,
                    'title' => 'Post 1'
                ],
                [
                    'id' => 2,
                    'title' => 'Post 2'
                ]
            ]
        ]);
    }

    public function create ()
    {

    }
}
