<?php

// namespace 


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\AdminController;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('applications')->insert([
            'appointment_date' => "2020-02-29",
            'personal_message' => "I am broke and I need help.",
            'counsellor' => "gabrielfemi799@gmail.com",
            'application_token' => Str::random(10)
        ]);
        
    }
}
