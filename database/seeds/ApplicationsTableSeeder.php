<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
            'application_token' => Str::random(8),
            'created_at' => '2020-03-16 15:45:09',
            'updated_at' => '2020-03-16 15:45:09'
        ]);
        
    }
}
