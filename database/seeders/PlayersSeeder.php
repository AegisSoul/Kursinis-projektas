<?php

namespace Database\Seeders;

use App\Models\Team;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create();
        // $teams = Team::all();

        // foreach ($teams as $team) {
        //     for ($i=0; $i < 5; $i++) { 
        //         $fn = $faker->firstName();
        //         $ln = $faker->lastName();
        //         $this->createPlayer($fn, $ln, $faker->jobTitle(), rand(1.50, 2.20), rand(0, 30), $team);
        //         $this->addPlayerStats($fn, $ln, rand(0, 10), rand(10, 20), rand(1, 5));
        //     }
        // }

        $team = Team::where('name', 'zalgiris')->first();

        $this->createPlayer('', '', '', 0, 0, $team);
        $this->addPlayerStats('', '', 0, 0, 0);

        $this->createPlayer('', '', '', 0, 0, $team);
        $this->addPlayerStats('', '', 0, 0, 0);


        $team = Team::where('name', 'zalgiris')->first();

        $this->createPlayer('', '', '', 0, 0, $team);
        $this->addPlayerStats('', '', 0, 0, 0);

        $this->createPlayer('', '', '', 0, 0, $team);
        $this->addPlayerStats('', '', 0, 0, 0);


    }

    private function createPlayer($firstName, $lastName, $position, $height, $average, Team $team)
    {
        // $table->string('FirstName');
        // $table->string('LastName');
        // $table->string('Position');
        // $table->double('Height');
        // $table->double('Average');
        DB::table('players')->updateOrInsert(
            [
                'FirstName' => $firstName,
                'LastName' => $lastName
            ],
            [
                'Position' => $position,
                'Height' => $height,
                'Average' => $average,
                'team_id' => $team->id
        ]);
    }

    private function addPlayerStats($firstName, $lastName, $minPoints, $maxPoints, $gamesPlayed)
    {


        $player = DB::table('players')->where('FirstName', $firstName)->where('LastName', $lastName)->first();


        // $table->foreignIdFor(Player::class);
        // $table->double('MinPoints');
        // $table->double('MaxPoints');
        // $table->double('GamesPlayed');

        DB::table('stats')->updateOrInsert(
            [
                'player_id' => $player->id
            ],
            [
                'MinPoints' => $minPoints,
                'MaxPoints' => $maxPoints,
                'GamesPlayed' => $gamesPlayed
            ]
        );
    }
}
