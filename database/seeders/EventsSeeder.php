<?php

namespace Database\Seeders;

use App\Models\Events;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'АКТИВНОСТ ECO-ACTION',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veritatis',
                'date_from' => '25.08.2023',
                'image' => 'images/homepage/homepage_card_2.jpg'
            ],
            [
                'title' => 'ESC Volunteers',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veritatis',
                'date_from' => '15.08.2023 - 21.08.2023',
                'image' => 'images/homepage/homepage_card_2.jpg'
            ],
            [
                'title' => 'BUILD YOUR STRENGTH',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veritatis',
                'date_from' => '07.07.2023',
                'image' => 'images/homepage/homepage_card_3.jpg'
            ],
            [
                'title' => 'ЛЕТЕН КАМП',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veritatis',
                'date_from' => '20.09.2023',
                'image' => 'images/homepage/homepage_card_4.jpg'
            ],
        ];

        foreach ($events as $event) {
            Events::create([
                'title' => $event['title'],
                'description' => $event['description'],
                'date_from' => $event['date_from'],
                'image' => $event['image'],

            ]);
        }
    }
}
