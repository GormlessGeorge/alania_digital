<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'Moderator', 'email' => 'moderator@example.com', 'password' => bcrypt(env('MODERATOR_PASSWORD')), 'is_moderator' => 1]);
    }
}
