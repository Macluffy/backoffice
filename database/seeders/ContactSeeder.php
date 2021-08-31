<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [   
                "location"=>"Location :",
                "locationR"=>"rue du midi 29",
                "email"=>"Email :",
                "emailR"=>"popof@hotmail.com",
                "call"=>"Call :",
                "callR"=>"0487136890",
                "yname"=>"Your name",
                "yemail"=>"Your email",
                "subject"=>"Subject",
                "message"=>"Message",
                "smessage"=>"Send message",
            ],
        ]);
    }
}
