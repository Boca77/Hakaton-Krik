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
                'name' => 'Матео',
                'last-name' => 'Тренкоски',
                'position' => 'Практикант во ЦМА Крик',
                'linkedIn' => 'LinkedIn link',

            ],
            [
                'name' => 'Игор',
                'last-name' => 'Димовски',
                'position' => 'Координатор за волонтери во ЦМА - Крик',
                'linkedIn' => 'LinkedIn link',

            ],
            [
                'name' => 'Сара',
                'last-name' => 'Димоска',
                'position' => 'Координатор во ЦМА - Крик',
                'linkedIn' => 'LinkedIn link',

            ],
        ];

        foreach ($ourTeam as $member) {
            Team::create([
                'name' => $member['name'],
                'last-name' => $member['last-name'],
                'position' => $member['position'],
                'linkedIn' => $member['linkedIn'],
            ]);
        }
    }
}
