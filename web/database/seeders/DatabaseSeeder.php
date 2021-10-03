<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create([
            'name' => 'Jenbert and Stubert',
            'email' => 'loveaburt@gmail.com',
            'is_admin' => 1,
            'password' => Hash::make('loveaburt')
        ]);

        User::factory(1)->create([
            'name' => 'Jacquie Creed',
            'email' => 'jacquiecreed@gmail.com',
            'password' => Hash::make('jacquiecreed')
        ]);
    }
}
