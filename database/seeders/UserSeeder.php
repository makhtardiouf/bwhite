<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bwhite Admin',
            'phone' => '221701112266',
            'email' => 'admin@bwhite.com',
            'password' => Hash::make('admin'),
        ]);

        // DB::table('users')->insert([
        //     'id' => 1,
        //     'name' => 'admin',
        //     'email' => 'admin@bwhite.com',
        //     'phone' => '221701112266',
        //     'password' => Hash::make('admin'),
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        User::factory()
            ->count(2)
            ->create();

    }
}
