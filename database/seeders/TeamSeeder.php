<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'id' => 1,
            'name' => 'MUTD',
            'country' => 'England', 
            'rank' => 2,
            'captain' => 3,
            'goalDiff' => 12
        ]);

        DB::table('teams')->insert([
            'id' => 2,
            'name' => 'Juventus',
            'country' => 'Italy', 
            'rank' => 2,
            'captain' => 1,
            'goalDiff' => 5
        ]);

        DB::table('teams')->insert([
            'id' => 3,
            'name' => 'PSG',
            'country' => 'France', 
            'rank' => 1,
            'captain' => 2,
            'goalDiff' => 18
        ]);
    }
}
