<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Project 1',
                'date_from' => '2024-01-01',
                'date_to' => '2024-12-31',
                'description_1' => 'Description for Project 1 - Part 1',
                'description_2' => 'Description for Project 1 - Part 2',
                'description_3' => 'Description for Project 1 - Part 3',
                'img_main' => 'images/homepage_uslugi_cardimg.jpg',
                'img_2' => 'images/students108126313-2048x2048.jpg.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project 2',
                'date_from' => '2023-01-01',
                'date_to' => '2023-12-31',
                'description_1' => 'Description for Project 2 - Part 1',
                'description_2' => 'Description for Project 2 - Part 2',
                'description_3' => 'Description for Project 2 - Part 3',
                'img_main' => 'images/homepage_card_3.jpg',
                'img_2' => 'images/homepage_uslugi_cardimg.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project 3',
                'date_from' => '2024-01-01',
                'date_to' => '2024-12-31',
                'description_1' => 'Description for Project 1 - Part 1',
                'description_2' => 'Description for Project 1 - Part 2',
                'description_3' => 'Description for Project 1 - Part 3',
                'img_main' => 'images/homepage_uslugi_cardimg.jpg',
                'img_2' => 'images/students108126313-2048x2048.jpg.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project 4',
                'date_from' => '2023-01-01',
                'date_to' => '2023-12-31',
                'description_1' => 'Description for Project 2 - Part 1',
                'description_2' => 'Description for Project 2 - Part 2',
                'description_3' => 'Description for Project 2 - Part 3',
                'img_main' => 'images/homepage_card_3.jpg',
                'img_2' => 'images/homepage_uslugi_cardimg.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
