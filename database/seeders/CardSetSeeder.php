<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

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
            'releaseDate' => Carbon::parse('22-07-2016')->toDateTimeString(),
            
        ]);

        DB::table('card_set')->insert([
            'setIdcode' => 'AER',
            'set' => 'AetherRevolt',
            'type' => 'expansion',
            'cardsCount' => 184,
            'releaseDate' => Carbon::parse('20-01-2017')->toDateTimeString(),
        ]);
    }
}
