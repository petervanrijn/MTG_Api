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

        $type_of_set = ['EldritchMoon', 'AetherRevolt'];

        foreach($type_of_set as $set){
            DB::table('card_set')->insert([
                'set' => $set
            ]);
        }
    }
}
