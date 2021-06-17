<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder skelet om te copy pasten

        // DB::table('card')->insert([
        //     'set' => '',
        //     'name' => '',
        //     'generic_mana' => ,
        //     'type'  => '',
        //     'type_name' => '',
        //     'power' => ,
        //     'toughness' => ,
        //     'image' => '/image/',          
        // ]);
        
        // ELDRITCH MOON
        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Abundant Maw',
            'generic_mana' => 8,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Leech',
            'power' => 6,
            'toughness' => 4,
            'image' => '/image/Abundant_Maw.jpg',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Decimator of the Provinces',
            'generic_mana' => 10,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Boar',
            'power' => 7,
            'toughness' => 7,
            'image' => '/image/Decimator_of_the_Provinces.jpg',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Distended Mindbender',
            'generic_mana' => 8,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Insect',
            'power' => 5,
            'toughness' => 5,
            'image' => '/image/Distended_Mindbender.jpg',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Drownyard Behemoth',
            'generic_mana' => 9,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Crab',
            'power' => 5,
            'toughness' => 7,
            'image' => '/image/Drownyard_Behemoth.jpg',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Elder Deep-Fiend',
            'generic_mana' => 8,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Octopus',
            'power' => 5,
            'toughness' => 6,
            'image' => '/image/Elder_Deep-Fiend.jpg',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Emrakul, the Promised End',
            'generic_mana' => 13,
            'type' => 'Legendary Creature',
            'type_name'  => 'Eldrazi',
            'power' => 13,
            'toughness' => 13,
            'image' => '/image/Emrakul.jpg',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Eternal Scourge',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Horror',
            'power' => 3,
            'toughness' => 3,
            'image' => '/image/Eternal_Scourge.jpg',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'It of the Horrid Swarm',
            'generic_mana' => 8,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Insect',
            'power' => 4,
            'toughness' => 4,
            'image' => '/image/It_of_the_Horrid_Swarm',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Lashweed Lurker',
            'generic_mana' => 8,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Horror',
            'power' => 5,
            'toughness' => 4,
            'image' => '/image/Lashweed_Lurker.jpg',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Mockery of Nature',
            'generic_mana' => 9,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Beast',
            'power' => 6,
            'toughness' => 5,
            'image' => '/image/Mockery_of_Nature.jpg',          
        ]);

        // AETHER REVOLT

        // DUMMY FAKE DATA
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Aether Dummy',
            'generic_mana' => 9,
            'type' => 'Creature',
            'type_name'  => 'Aether Beast',
            'power' => 6,
            'toughness' => 5,
            'image' => '/image/Mockery_of_Nature.jpg',          
        ]);

    }
}
