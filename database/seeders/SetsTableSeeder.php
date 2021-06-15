<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sets')->insert([
            'setIdcode' => 'EMN',
            'name' => 'Eldritch Moon',
            'type' => 'expansion',
            'cardsCount' => 205,
            'releaseDate' => 22-07-2016,
        ]);

        DB::table('sets')->insert([
            'setIdcode' => 'AER',
            'name' => 'Aether Revolt',
            'type' => 'expansion',
            'cardsCount' => 184,
            'releaseDate' => 20-01-2017,
        ]);
    }
}
