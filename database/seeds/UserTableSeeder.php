<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // this seeder creates and admin with a role id of 1

        \App\User::create([
            'name' => 'ezekiel',
            'email' => Str::random(4).'@gmail.com',
            'gender' => 'Male',
            'password' => Hash::make('gabriel123'),
            'role_id' => 1,
            'first_time' => 1,

        ]);
    }
}
