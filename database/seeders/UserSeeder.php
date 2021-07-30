<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'id'             => 1,
            'name'           => 'Wizroots Admin',
            'email'          => 'admin@wizroots.com',
            'password'       => bcrypt('password'),
            'remember_token' => null,
        ]);
        $user->assignRole('super-admin');
    }
}
