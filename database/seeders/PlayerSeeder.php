<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'id' => 1,
            'name' => 'Ronaldo',
            'nationality' => 'Portugal',
            'age' => 34

        ]);

        DB::table('players')->insert([
            'id' => 2,
            'name' => 'Messi',
            'nationality' => 'Argentina',
            'age' => 34

        ]);

        DB::table('players')->insert([
            'id' => 3,
            'name' => 'Pogba',
            'nationality' => 'France',
            'age' => 28

        ]);
    }
}
