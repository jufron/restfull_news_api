<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title'         => 'learn javascript',
            'slug'          => 'learn-javascript',
            'news_content'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eaque nihil laborum atque iure modi vel minus repudiandae ut molestias?',
            'user_id'       => 1
        ]);

        Post::create([
            'title'         => 'learn php',
            'slug'          => 'learn-php',
            'news_content'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eaque nihil laborum atque iure modi vel minus repudiandae ut molestias?',
            'user_id'       => 2
        ]);

        Post::create([
            'title'         => 'learn node js',
            'slug'          => 'learn-node-js',
            'news_content'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eaque nihil laborum atque iure modi vel minus repudiandae ut molestias?',
            'user_id'       => 3
        ]);

        Post::create([
            'title'         => 'learn laravel',
            'slug'          => 'learn-laravel',
            'news_content'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eaque nihil laborum atque iure modi vel minus repudiandae ut molestias?',
            'user_id'       => 1
        ]);
    }
}
