<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CardSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('card_set')->insert([
            'setIdcode' => 'EMN',
            'set' => 'EldritchMoon',
            'type' => 'expansion',
            'cardsCount' => 205,
            'releaseDate' => 22-07-2016,
        ]);

        DB::table('card_set')->insert([
            'setIdcode' => 'AER',
            'set' => 'AetherRevolt',
            'type' => 'expansion',
            'cardsCount' => 184,
            'releaseDate' => 20-01-2017,
        ]);
    }
}
