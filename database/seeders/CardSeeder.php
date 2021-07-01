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
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/a/8a4e7ef7-7958-4d7c-b319-4d3db7955002.jpg?1576383697',          
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

        //MOETEN OMGEZET WORDEN (SEEDERS VAN PETER)
        
        // DB::table('cards')->insert([
        //     'setIdcode' => 'AER',
        //     'name' => 'Aerial Modification',
        //     'color' => 'white',
        //     'text' => 'Enchant creature or Vehicle As long as enchanted permanent is a Vehicle, it’s a creature in addition to its other types. Enchanted creature gets +2/+2 and has flying.',
        //     'cost' => 5,
        //     'type' => 'Enchantment — Aura',
        //     'image' => 'aer-1-aerial-modification.jpg',
        // ]);
        // DB::table('cards')->insert([
        //     'setIdcode' => 'AER',
        //     'name' => 'Aeronaut Admiral ',
        //     'color' => 'white',
        //     'text' => 'Flying Vehicles you control have flying.',
        //     'subText' => 'The Consulate recruits its best pilots from the League of Aeronauts. Many go on to command entire fleets.',
        //     'cost' => 4,
        //     'type' => 'Creature — Human Pilot',
        //     'power' => 3,
        //     'toughness' => 1,
        //     'image' => 'aer-2-aeronaut-admiral'
        // ]);
        // DB::table('cards')->insert([
        //     'setIdcode' => 'AER',
        //     'name' => 'Aether Inspector',
        //     'color' => 'white',
        //     'text' => 'Vigilance When Aether Inspector enters the battlefield, you get {E}{E} (two energy counters). Whenever Aether Inspector attacks, you may pay {E}{E}. If you do, create a 1/1 colorless Servo artifact creature token.',
        //     'cost' => 4,
        //     'type' => 'Creature — Dwarf Artificer',
        //     'power' => 2,
        //     'toughness' => 3,
        //     'image' => 'aer-3-aether-inspector.jpg'
        // ]);
        // DB::table('cards')->insert([
        //     'setIdcode' => 'AER',
        //     'name' => 'Aethergeode Miner',
        //     'color' => 'white',
        //     'text' => 'Whenever Aethergeode Miner attacks, you get {E}{E} (two energy counters). Pay {E}{E}: Exile Aethergeode Miner, then return it to the battlefield under its owner’s control.',
        //     'subText' => 'Gremlins in the wild feed on nodules of pure aether, which are also prized by miners.',
        //     'cost' => 2,
        //     'type' => 'Creature — Dwarf Scout',
        //     'power' => 3,
        //     'toughness' => 1,
        //     'image' => 'Creature — Dwarf Scout,jpg'
        // ]);

    }
}
