<?php

namespace Database\Seeders;

use App\Models\Volunteers;
use Illuminate\Database\Seeder;

class VolunteersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $volunteers = [
            [
                'name' => 'Idil Abes',
                'age' => '20',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\1-Idil-Abes.png'
            ],
            [
                'name' => 'Melih Furkan Orta',
                'age' => '22',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\2-Melih-Furkan-Orta.png'
            ],
            [
                'name' => 'Bedirhan Sevim',
                'age' => '22',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\3-Bedirhan-Sevim.png'
            ],
            [
                'name' => 'Zeynep Cebeci',
                'age' => '20',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\4-Zeynep-Cebeci.png'
            ],
            [
                'name' => 'Merve Ozkan',
                'age' => '18',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\5-Merve-Ozkan.png'
            ],
            [
                'name' => 'Melek Cakan',
                'age' => '20',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\6-Melek-Cakan.png'
            ],
            [
                'name' => 'Melisa Pektaş',
                'age' => '23',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\7-Melisa-Pektaş.png'
            ],
            [
                'name' => 'Manon Lacoste',
                'age' => '21',
                'country' => 'Франција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\8-Manon-Lacoste.png'
            ],
            [
                'name' => 'Lisa Simone',
                'age' => '24',
                'country' => 'Франција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\9-Lisa-Simone.png'
            ],
            [
                'name' => 'Kaan Alğın',
                'age' => '23',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\10-Kaan-Alğın.png'
            ],
            [
                'name' => 'Metehan Cam',
                'age' => '23',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\11-Metehan-Cam.png'
            ],
            [
                'name' => 'Ali Karabay',
                'age' => '29',
                'country' => 'Турција',
                'is-long-term' => 1,
                'image' => 'images\volunteers\12-Ali-Karabay.png'
            ],
        ];

        foreach ($volunteers as $volunteer) {
            Volunteers::create([
                'name' => $volunteer['name'],
                'age' => $volunteer['age'],
                'country' => $volunteer['country'],
                'is-long-term' => $volunteer['is-long-term'],
                'image' => $volunteer['image']
            ]);
        }
    }
}
