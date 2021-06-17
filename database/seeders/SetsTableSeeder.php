<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

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
            'releaseDate' => Carbon::parse('22-07-2016')->toDateTimeString(),
        ]);

        DB::table('sets')->insert([
            'setIdcode' => 'AER',
            'name' => 'Aether Revolt',
            'type' => 'expansion',
            'cardsCount' => 184,
            'releaseDate' => Carbon::parse('20-01-2017')->toDateTimeString(),
        ]);
    }
}
