<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'post_id' => 1,
            'user_id' => 1,
            'comment_content' => 'this comment 1'
        ]);
        Comment::create([
            'post_id' => 2,
            'user_id' => 2,
            'comment_content' => 'this comment 2'
        ]);
        Comment::create([
            'post_id' => 3,
            'user_id' => 3,
            'comment_content' => 'this comment 3'
        ]);
        Comment::create([
            'post_id' => 4,
            'user_id' => 1,
            'comment_content' => 'this comment 4'
        ]);
    }
}
