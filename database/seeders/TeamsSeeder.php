<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->createTeam('wolves', '', '/Images/Wolves.svg', 'cyan-500');
        $this->createTeam('gargzdai', '', '/Images/Gargzdai.svg', 'yellow-500');
        $this->createTeam('jonava', '', '/Images/Jonava.svg', 'blue-800');
        $this->createTeam('zalgiris', '', '/Images/Zalgiris.svg', 'green-500');
        $this->createTeam('nevezis', '', '/Images/Nevezis.svg', 'gray-500');
        $this->createTeam('neptunas', '', '/Images/Neptunas.svg');
        $this->createTeam('lietkabelis', '', '/Images/Lietkabelis.svg');
        $this->createTeam('pienozvaigzdes', '', '/Images/Pieno zvaigzdes.svg');
        $this->createTeam('labasgas', '', '/Images/Prienai.svg');
        $this->createTeam('siauliai', '', '/Images/Siauliai.svg');
        $this->createTeam('juventus', '', '/Images/Juventus.svg');
        $this->createTeam('rytas', '', '/Images/Vilnius.svg');
    }

    private function createTeam($name, $logo, $bg_logo, $color='white', $bg_color='gray-800')
    {
        DB::table('teams')->updateOrInsert(
            [
                'name' => $name
            ],
            [
            'logo' => $logo,
            'bg_color' => $bg_color,
            'color' => $color
        ]);
    }
}
