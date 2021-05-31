<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'setIdcode' => 'AER',
            'name' => 'Aerial Modification',
            'color' => 'white',
            'text' => 'Enchant creature or Vehicle As long as enchanted permanent is a Vehicle, it’s a creature in addition to its other types. Enchanted creature gets +2/+2 and has flying.',
            'cost' => 5,
            'type' => 'Enchantment — Aura',
            'image' => 'aer-1-aerial-modification.jpg',
        ]);
        DB::table('cards')->insert([
            'setIdcode' => 'AER',
            'name' => 'Aeronaut Admiral ',
            'color' => 'white',
            'text' => 'Flying Vehicles you control have flying.',
            'subText' => 'The Consulate recruits its best pilots from the League of Aeronauts. Many go on to command entire fleets.',
            'cost' => 4,
            'type' => 'Creature — Human Pilot',
            'power' => 3,
            'toughness' => 1,
            'image' => 'aer-2-aeronaut-admiral'
        ]);
        DB::table('cards')->insert([
            'setIdcode' => 'AER',
            'name' => 'Aether Inspector',
            'color' => 'white',
            'text' => 'Vigilance When Aether Inspector enters the battlefield, you get {E}{E} (two energy counters). Whenever Aether Inspector attacks, you may pay {E}{E}. If you do, create a 1/1 colorless Servo artifact creature token.',
            'cost' => 4,
            'type' => 'Creature — Dwarf Artificer',
            'power' => 2,
            'toughness' => 3,
            'image' => 'aer-3-aether-inspector.jpg'
        ]);
        DB::table('cards')->insert([
            'setIdcode' => 'AER',
            'name' => 'Aethergeode Miner',
            'color' => 'white',
            'text' => 'Whenever Aethergeode Miner attacks, you get {E}{E} (two energy counters). Pay {E}{E}: Exile Aethergeode Miner, then return it to the battlefield under its owner’s control.',
            'subText' => 'Gremlins in the wild feed on nodules of pure aether, which are also prized by miners.',
            'cost' => 2,
            'type' => 'Creature — Dwarf Scout',
            'power' => 3,
            'toughness' => 1,
            'image' => 'Creature — Dwarf Scout,jpg'
        ]);
    
    }
}
