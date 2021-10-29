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
        //
        // $user =  DB::table('users')->create([
        //     'name' => 'Le Trong Tan',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('Admin@123'),
        // ]);
        $user = User::create([
            'name' => 'Le Trong Tan',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin@123'),
        ]);

        $user1 = User::create([
            'name' => 'Le Trong Tan',
            'email' => 'tanltps04690@gmail.com',
            'password' => Hash::make('Admin@123'),
        ]);

        $user->assignRole('Admin');
    }
}
