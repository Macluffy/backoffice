<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [   
                "soustitre"=>"UI/UX DesignerUI",
                "petittext"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "birthday"=>"1 May 1995",
                "Website"=>"www.example.com",
                "city"=>"New yotk, USA",
                "age"=>"30",
                "phone"=>"0484848484",
                "degree"=>"Master",
                "PHEmailone"=>"email@example.com",
                "Freelance"=>"Available",
                "text"=>"Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.",

            ],
        ]);
    }
}
