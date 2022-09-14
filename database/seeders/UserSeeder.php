<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $users = [
            [
                'name' => 'administrator',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin12345'),
            ],
        ];
        User::insert($users);
    }
}
