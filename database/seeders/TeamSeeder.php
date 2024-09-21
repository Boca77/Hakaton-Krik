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
                'image' => 'https://drive.google.com/file/d/19iAw0QMXASKNonjl00dh62Pg7ICKE0NY/view?usp=drive_link',
                'name' => 'Матео',
                'last-name' => 'Тренкоски',
                'position' => 'Практикант во ЦМА Крик',
                'linkedIn' => 'LinkedIn link',

            ],
            [
                'image' => 'https://drive.google.com/file/d/1DxL25o7MfwxWKj04uuOodUfjqKxVs2_5/view?usp=drive_link',
                'name' => 'Игор',
                'last-name' => 'Димовски',
                'position' => 'Координатор за волонтери во ЦМА - Крик',
                'linkedIn' => 'LinkedIn link',

            ],
            [
                'image' => 'https://drive.google.com/file/d/1ZIYCsSQuLhIB9WZncL3U2eU3ac6pCQKa/view?usp=drive_link',
                'name' => 'Сара',
                'last-name' => 'Димоска',
                'position' => 'Координатор во ЦМА - Крик',
                'linkedIn' => 'LinkedIn link',

            ],
        ];

        foreach ($ourTeam as $member) {
            Team::create([
                'image' => $member['image'],
                'name' => $member['name'],
                'last-name' => $member['last-name'],
                'position' => $member['position'],
                'linkedIn' => $member['linkedIn'],
            ]);
        }
    }
}
