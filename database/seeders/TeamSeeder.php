<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ourTeam = [
            [
                'image' => 'images/team/mateo-trenkoski.jpg',
                'name' => 'Матео',
                'last_name' => 'Тренкоски',
                'position' => 'Практикант во ЦМА Крик',
                'linkedIn' => 'LinkedIn link',

            ],
            [
                'image' => 'images/team/igor-dimovski.jpg',
                'name' => 'Игор',
                'last_name' => 'Димовски',
                'position' => 'Координатор за волонтери во ЦМА - Крик',
                'linkedIn' => 'LinkedIn link',

            ],
            [
                'image' => 'images/team/sara-dimoska.jpg',
                'name' => 'Сара',
                'last_name' => 'Димоска',
                'position' => 'Координатор во ЦМА - Крик',
                'linkedIn' => 'LinkedIn link',

            ],
        ];

        foreach ($ourTeam as $member) {
            Team::create([
                'image' => $member['image'],
                'name' => $member['name'],
                'last_name' => $member['last_name'],
                'position' => $member['position'],
                'linkedIn' => $member['linkedIn'],
            ]);
        }
    }
}
