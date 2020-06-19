<?php

use Illuminate\Database\Seeder;

class DummyDbSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Gabriel',
            'email' => 'gabrielfemi799@gmail.com',
            'password' => (new Illuminate\Hashing\BcryptHasher)->make('gabriel123'),
            'role_id' => 1
        ]);
    }
}
