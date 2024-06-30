<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username'      => 'james',
            'email'         => 'james@gmail.com',
            'password'      => bcrypt('12345678'),
            'firstName'     => 'James',
            'lastName'      => 'Doe',
        ]);
        User::create([
            'username'      => 'john',
            'email'         => 'john@gmail.com',
            'password'      => bcrypt('12345678'),
            'firstName'     => 'John',
            'lastName'      => 'Doe'
        ]);
        User::create([
            'username'      => 'jane',
            'email'         => 'jane@gmail.com',
            'password'      => bcrypt('12345678'),
            'firstName'     => 'Jane',
            'lastName'      => 'Doe'
        ]);
    }
}
