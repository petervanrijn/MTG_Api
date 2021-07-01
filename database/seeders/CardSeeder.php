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
        //     'image' => '',          
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
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/8/587cb384-db24-4e3d-a338-230e50305d31.jpg?1576383703',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Distended Mindbender',
            'generic_mana' => 8,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Insect',
            'power' => 5,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/b/8b5d1e41-fb0b-4866-912a-2a7d49542428.jpg?1576383709',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Drownyard Behemoth',
            'generic_mana' => 9,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Crab',
            'power' => 5,
            'toughness' => 7,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/8/082690e8-07b9-4a91-b779-e0123a69ee12.jpg?1576383716',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Elder Deep-Fiend',
            'generic_mana' => 8,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Octopus',
            'power' => 5,
            'toughness' => 6,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/normal/front/3/c/3c2789fb-a263-4207-8a56-4eeb015a024c.jpg?1576383721',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Emrakul, the Promised End',
            'generic_mana' => 13,
            'type' => 'Legendary Creature',
            'type_name'  => 'Eldrazi',
            'power' => 13,
            'toughness' => 13,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/normal/front/8/d/8d74a469-c71d-4773-99d3-5456b31df424.jpg?1576383727',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Eternal Scourge',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Horror',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/normal/front/1/3/13ce52f5-6d49-4d44-a3d7-925340de8406.jpg?1576383733',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'It of the Horrid Swarm',
            'generic_mana' => 8,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Insect',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/normal/front/2/e/2e9160cb-d3de-49ca-a97d-2cd259cd5447.jpg?1576383739',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Lashweed Lurker',
            'generic_mana' => 8,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Horror',
            'power' => 5,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/normal/front/a/1/a13f9a76-3370-4809-88ff-c300bca31c9e.jpg?1576383747',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Mockery of Nature',
            'generic_mana' => 9,
            'type' => 'Creature',
            'type_name'  => 'Eldrazi Beast',
            'power' => 6,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/normal/front/3/1/3118737f-2fd9-4fe5-bd0f-43c9ef2166e2.jpg?1576383753',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Vexing Scuttler',
            'generic_mana' => 8,
            'type'  => 'Creature',
            'type_name' => 'Eldrazi Crab',
            'power' => 4,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/normal/front/1/c/1c3dd0aa-f6e9-435c-af64-20e9de67efe9.jpg?1576383758',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Wretched Gryff',
            'generic_mana' => 7,
            'type'  => 'Creature',
            'type_name' => 'Eldrazi Hippogriff',
            'power' => 3,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/d/9d65efec-018f-485c-906c-460379b4af87.jpg?1576383765',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Blessed Alliance ',
            'generic_mana' => 1,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/5/b5805eab-9a32-4c0c-9015-7bdb74ad7634.jpg?1576383772',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Borrowed Grace',
            'generic_mana' => 2,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/0/f0067567-3434-4c12-9d4d-04ffc98d012c.jpg?1576383780',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Bruna, the Fading Light ',
            'generic_mana' => 5,
            'type'  => 'Legendary Creature',
            'type_name' => 'Angel Horror',
            'power' => 5,
            'toughness' => 7,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/7/27907985-b5f6-4098-ab43-15a0c2bf94d5.jpg?1576383786',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Brisela, Voice of Nightmares',
            'type'  => 'Legendary Creature',
            'type_name' => 'Eldrazi Angel',
            'power' => 9,
            'toughness' => 10,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/a/5a7a212e-e0b6-4f12-a95c-173cae023f93.jpg?1576384299',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Choking Restraints',
            'generic_mana' => 2,
            'type'  => 'Enchantment',
            'type_name' => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/5/4549735d-df63-47db-ad53-0497499fe387.jpg?1576383794',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Collective Effort',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/8/d85a6369-c07f-47d5-8448-72d8ec7e7898.jpg?1576383801',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Courageous Outrider',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Human Scout',
            'power' => 3,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/1/4123da54-9947-462e-9862-3eecc459a75b.jpg?1576383807',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Dawn Gryff',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Hippogriff',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/2/42d30894-82b9-4af8-b0bb-48a78acbc4bd.jpg?1576383815',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Deploy the Gatewatch',
            'generic_mana' => 4,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/3/a3aa54d9-9f01-46e4-b4bd-f8bc57b44ac1.jpg?1576383821',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Desperate Sentry',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Soldier',
            'power' => 1,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/1/4135c619-fcff-4339-b778-31dd83e68fcb.jpg?1576383828',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Drogskol Shieldmate',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Spirit Soldier',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/5/156b4bca-4145-472b-bf80-13edb0bef561.jpg?1576383834',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Extricator of Sin',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Cleric',
            'power' => 0,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/6/b6867ddd-f953-41c6-ba36-86ae2c14c908.jpg?1576383847',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Faith Unbroken',
            'generic_mana' => 3,
            'type'  => 'Enchantment',
            'type_name' => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/2/12bf6e58-c278-4bfe-8443-33afc7618b38.jpg?1576383852',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Faithbearer Paladin',
            'generic_mana' => 4,
            'type'  => 'Creature',
            'type_name' => 'Human Knight',
            'power' => 3,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/f/af15a774-b97f-4bc0-913d-4d2a047fed8a.jpg?1576383858',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Fiend Binder',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Soldier',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/0/d0870d21-603f-4d36-8054-943adba06301.jpg?1576383865',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Geist of the Lonely Vigil',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Spirit Cleric',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/3/13118343-e026-4970-bf03-ba2d8fc58bac.jpg?1576383870',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Gisela, the Broken Blade',
            'generic_mana' => 2,
            'type'  => 'Legendary Creature',
            'type_name' => 'Angel Horror',
            'power' => 4,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/7/c75c035a-7da9-4b36-982d-fca8220b1797.jpg?1581365978',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Give No Ground',
            'generic_mana' => 3,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/c/1cb3347a-9b32-46a4-a621-4ae5244ba2f5.jpg?1576383885',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Guardian of Pilgrims',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Spirit Cleric',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/4/a41b6ca9-1d6f-46ce-aba0-952871a10a4b.jpg?1576383891',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Ironclad Slayer',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Warrior',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/4/d413f69f-fe2d-4049-8640-178af7e927d9.jpg?1576383898',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Ironwrights Cleansing',
            'generic_mana' => 2,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/1/916d8aa5-158f-46f4-babe-981a391fd88b.jpg?1576383906',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Lone Rider',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Human Knight',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/a/9a55b60a-5d90-4f73-984e-53fdcc0366e4.jpg?1576383921',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Long Road Home',
            'generic_mana' => 1,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/5/d568323c-b631-48b6-b6da-4dc29d330a12.jpg?1576383928',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Lunarch Mantle',
            'generic_mana' => 1,
            'type'  => 'Enchantment',
            'type_name' => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/6/360f4759-c178-4ac2-b561-c81e13f67740.jpg?1576383935',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Peace of Mind',
            'generic_mana' => 1,
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/6/36e37aa2-d898-47f5-9679-5717bfa25688.jpg?1576383942',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Providence',
            'generic_mana' => 5,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/e/2e5edd8d-8e10-4414-a326-95a672dfcff7.jpg?1576383949',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Repel the Abominable',
            'generic_mana' => 1,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/f/cf153f4d-0d37-41a9-80d8-7f2adaad79c7.jpg?1576383956',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Sanctifier of Souls',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Human Cleric',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/d/8d839c5a-dc35-4eaa-9cf0-b6e002815726.jpg?1576383963',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Selfless Spirit',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Spirit Cleric',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/4/a4624976-3773-4a1e-b725-5f6efce147a5.jpg?1576383969',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Sigardas Aid',
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/f/7fc32f1d-dee7-4f71-a652-26a006e6020a.jpg?1576383976',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Sigardian Priest',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Human Cleric',
            'power' => 1,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/8/f8e798c7-0cbc-444e-8033-629baec7dca8.jpg?1576383982',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Spectral Reserves',
            'generic_mana' => 3,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/6/7618aa2d-d5b3-41e6-978f-2c8292f7f896.jpg?1576383989',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Steadfast Cathar',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Human Soldier',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/e/5e1b65a7-d385-428b-986c-a0d9283a5f75.jpg?1576383996',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Subjugator Angel',
            'generic_mana' => 4,
            'type'  => 'Creature',
            'type_name' => 'Angel',
            'power' => 4,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/f/af01371c-cd09-4882-9caf-04426dd4c965.jpg?1576384002',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Thalia, Heretic Catha',
            'generic_mana' => 2,
            'type'  => 'Legendary Creature',
            'type_name' => 'Human Soldier',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/b/ab0cee38-5e24-49d0-870c-22843ed4e101.jpg?1576384009',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Thalias Lancers',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Human Knight',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/9/9930d08d-5965-4c16-a84d-43c8ccf2ad0b.jpg?1576384015',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Thraben Standard Bearer',
            'type'  => 'Creature',
            'type_name' => 'Human Soldier',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/5/15b7cd60-e3b9-4dd8-ad3c-a687f642147f.jpg?1576384022',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Advanced Stitchwing',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Zombie Horror',
            'power' => 3,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/b/fbdb7f1c-6139-4e68-8706-01f373548a4f.jpg?1576384028',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Chilling Grasp',
            'generic_mana' => 2,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/0/60d85d58-eae3-4f9d-8f54-440fa6ded95b.jpg?1576384034',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Coax from the Blind Eternities',
            'generic_mana' => 2,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/4/740ad768-2be0-4e5a-9d60-6c7ec4bdc107.jpg?1576384040',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Contingency Plan',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/e/9edb76bd-db4b-4279-8eaa-dfdf5952eafc.jpg?1576384047',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Convolute',
            'generic_mana' => 2,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/1/e17cf756-ec41-4934-8906-4276277c1470.jpg?1576384056',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Curious Homunculus',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Homunculus',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/2/22e816af-df55-4a3f-a6e7-0ff3bb1b45b5.jpg?1576384071',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Displace',
            'generic_mana' => 2,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/a/8ab850c5-6f5e-41b7-ab52-094579caca12.jpg?1576384077',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Docent of Perfection',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Insect Horror',
            'power' => 5,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/0/30c3d4c1-dc3d-4529-9d6e-8c16149cf6da.jpg?1576384090',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Drag Under',
            'generic_mana' => 2,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/d/0dffa444-92ff-41d8-8b55-8896808bbfab.jpg?1576384096',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Enlightened Maniac',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Human',
            'power' => 0,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/6/a6e692b8-f71d-485b-b37b-71259dc6c48e.jpg?1576384103',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Exultant Cultist',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Wizard',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/2/b2c22e0a-81c5-485f-81f0-3e85397108e0.jpg?1576384109',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Fogwalker',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Spirit',
            'power' => 1,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/8/0894d76b-801a-4e3b-8378-bfa81fe24d59.jpg?1576384116',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Fortunes Favor',
            'generic_mana' => 3,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/a/6a67dd08-0064-4750-adf5-07bacb0296eb.jpg?1576384123',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Geist of the Archives',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Spirit',
            'power' => 0,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/4/44d4fcbc-15b2-4370-a267-bc2c63ba2aa5.jpg?1576384129',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Grizzled Angler',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/e/1eb4ddf4-f695-412d-be80-b93392432498.jpg?1576384142',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Identity Thief',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Shapeshifter',
            'power' => 0,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/8/9865100f-dddc-407e-a379-2c285475ec89.jpg?1576384148',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Imprisoned in the Moon',
            'generic_mana' => 2,
            'type'  => 'Enchantment',
            'type_name' => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/9/7990ebba-e9f2-4ba4-a352-e26ec81d4bed.jpg?1576384154',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Ingenious Skaab',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Zombie Horror',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/9/19d6ed0b-40ba-407d-94de-05a705e79b95.jpg?1576384161',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Laboratory Brute',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Zombie Horror',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/2/325f228e-46ff-43e2-bc1d-c2d2df443c51.jpg?1576384167',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Lunar Force',
            'generic_mana' => 2,
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/6/76614db3-480f-41f6-91ad-66301fc8e394.jpg?1576384174',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Mausoleum Wanderer',
            'type'  => 'Creature',
            'type_name' => 'Spirit',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/2/42391fa7-6172-487c-b8aa-d41ab7c64973.jpg?1576384180',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Minds Dilation',
            'generic_mana' => 5,
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/3/b3d6522a-b9a0-4185-b5ba-c20fa1b772eb.jpg?1576384187',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Nebelgast Herald',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Spirit',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/0/40965d3b-9b8f-4706-9364-64f758a768e6.jpg?1576384195',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Niblis of Frost',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Spirit',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/a/da2301c8-0ca8-4b26-a232-1df90effcb42.jpg?1576384202',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Scour the Laboratory',
            'generic_mana' => 4,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/c/4c3247a4-f99a-4fff-a3a1-c3d51ed1a754.jpg?1576384208',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Spontaneous Mutation',
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/0/a022c983-0fb8-4e8c-9ba3-9356ad340f66.jpg?1576384214',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Summary Dismissal',
            'generic_mana' => 2,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/b/0b75794d-3334-4b4d-9446-0a251dd3bd15.jpg?1576384222',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Take Inventory',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/3/a3584150-4f09-4c15-b13e-707bd91b3004.jpg?1576384228',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Tattered Haunter',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Spirit',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/d/fd8ac8da-7497-4b07-af86-29bac1361c8e.jpg?1576384234',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Turn Aside',
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/b/3b7573c2-484c-4b4e-9c26-0f005bd1daee.jpg?1576384240',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Unsubstantiate',
            'generic_mana' => 1,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/a/ba5dac3d-4b49-44c4-a7b2-0a99485252c9.jpg?1576384246',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Wharf Infiltrator',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Human Horror',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/6/264baa9a-67fc-4903-9ed8-a4ce6912a184.jpg?1576384252',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Boon of Emrakul',
            'generic_mana' => 2,
            'type'  => 'Enchantment',
            'type_name' => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/4/24bb97c6-d2ff-459f-986e-73e30534d865.jpg?1576384259',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Borrowed Malevolence',
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/7/a71f123e-aad9-4f3e-9f43-1d1be359affb.jpg?1576384267',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Cemetery Recruitment',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/a/3a23adea-9f4a-409c-a37d-323eee781273.jpg?1576384273',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Certain Death',
            'generic_mana' => 5,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/6/c67784b3-eb55-452e-b965-f63220b88896.jpg?1576384279',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Collective Brutality',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/b/cb94a02f-4660-45b6-8a39-941b710cf8f3.jpg?1576384285',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Cryptbreaker',
            'type'  => 'Creature',
            'type_name' => 'Zombie',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/2/629e37d1-c0f3-44f2-926e-41eb3687c1d9.jpg?1576384293',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Dark Salvation',
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/b/4b5978bd-a696-430e-8c35-729d96eec53e.jpg?1576384301',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Dusk Feaster',
            'generic_mana' => 5,
            'type'  => 'Creature',
            'type_name' => 'Vampire',
            'power' => 4,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/3/d34a6fdc-5be9-4cb4-97cc-de63e8a0dde1.jpg?1576384307',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Gavony Unhallowed',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Zombie',
            'power' => 2,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/1/21f4c713-089b-497c-8c0f-826cab10aa87.jpg?1576384315',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Graf Harvest',
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/b/fbc17697-9db9-41d4-aacf-b2f2e6ff80cf.jpg?1576384322',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Graf Rats',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Rats',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/d/3dedaff6-bd69-4fe3-a301-f7ea7c2f2861.jpg?1576384331',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Haunted Dead',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Zombie',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/4/14a7c8b7-ca77-47a0-8965-949723ec902d.jpg?1576384338',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Liliana, the Last Hope',
            'generic_mana' => 1,
            'type'  => 'Legendary Planeswalker',
            'type_name' => 'Liliana',
            'loyalty' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/a/fa6ac7d2-0127-49a8-b7d2-a38308d3c27b.jpg?1576384344',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Lilianas Elite',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Zombie',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/d/ad542aa9-5c0e-4962-b167-9071e66f9c03.jpg?1576384350',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Markov Crusader',
            'generic_mana' => 4,
            'type'  => 'Creature',
            'type_name' => 'Vampire Knight',
            'power' => 4,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/7/87d8354b-df56-4294-9f8a-b7c92e31b88e.jpg?1576384356',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Midnight Scavengers',
            'generic_mana' => 4,
            'type'  => 'Creature',
            'type_name' => 'Human Rogue',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/a/5a57187c-f0ec-40de-b725-786f787b00a2.jpg?1576384363',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Chittering Host',
            'type'  => 'Creature',
            'type_name' => 'Eldrazi Horror',
            'power' => 5,
            'toughness' => 6,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/0/70b94f21-4f01-46f8-ad50-e2bb0b68ea33.jpg?1576384298',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Murder',
            'generic_mana' => 1,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/f/0f2eb849-b3ab-4d26-86c5-235c8161cf2a.jpg?1576384369',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Noosegraf Mob',
            'generic_mana' => 4,
            'type'  => 'Creature',
            'type_name' => 'Zombie',
            'power' => 0,
            'toughness' => 0,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/e/de44166d-3db6-4ece-985d-b8977c25e29f.jpg?1576384375',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Oath of Liliana',
            'generic_mana' => 2,
            'type'  => 'Legendary Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/0/2028f577-e0fb-48dd-89c6-f4a000b0a881.jpg?1576384382',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Olivias Dragoon',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Vampire Berseker',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/6/868067ce-3415-4239-b7c3-d3ad4c03fb8d.jpg?1576384388',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Prying Questions',
            'generic_mana' => 2,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/c/ac9fcf7c-8785-4285-b583-7060edabc3c6.jpg?1576384394',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Rise from the Grave',
            'generic_mana' => 4,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/2/d2e5b5d5-691c-44f0-8fab-fdecdd4c721d.jpg?1576384400',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Ruthless Disposal',
            'generic_mana' => 4,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/e/fe81c78f-e3e2-4513-9711-896e6a1e6aba.jpg?1576384407',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Skirsdag Supplicant',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Cleric',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/3/b3f63897-15a1-4b34-9916-d9df62f66785.jpg?1576384414',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Strange Augmentation',
            'type'  => 'Enchantment',
            'type_name' => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/d/8d9b9847-7ef7-4fcc-ba16-8f2859d53fe6.jpg?1576384420',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Stromkirk Condemned',
            'type'  => 'Creature',
            'type_name' => 'Vampire Horror',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/4/c4a8403e-bf4c-4aae-9102-188f49c61ddf.jpg?1576384427',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Succumb to Temptation',
            'generic_mana' => 1,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/9/2974e18b-be17-4059-9f29-7afe1d1a51eb.jpg?1576384434',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Thraben Foulbloods',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Zombie Dog',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/f/bf0f72e0-1254-4bfb-b405-d64012dc171a.jpg?1576384441',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Tree of Perdition',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Plant',
            'power' => 0,
            'toughness' => 13,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/0/305bd19a-ae5e-46ca-8ff7-27810c968315.jpg?1576384447',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Vampire Cutthroat',
            'type'  => 'Creature',
            'type_name' => 'Vampire Rogue',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/5/954d53f3-ebbe-48e0-9e1a-7019d2b0740c.jpg?1576384454',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Voldaren Pariah',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Vampire Horror',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/5/25baac6c-5bb4-4ecc-b1d5-fced52087bd9.jpg?1576384469',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Wailing Ghoul',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Zombie',
            'power' => 1,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/b/7b1bf0dd-825c-4c8a-a48d-84f35fbe5901.jpg?1576384476',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Weirded Vampire',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Vampire Horror',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/b/fb5234ac-e308-417d-96b0-d860f3186e6b.jpg?1576384483',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Whispers of Emrakul',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/b/0b7ba428-5a35-4062-8e16-39eb927cb316.jpg?1576384489',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Abandon Reason',
            'generic_mana' => 2,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/8/18c0b3b3-bb62-42c5-9869-386af0540a9b.jpg?1576384496',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Alchemists Greeting',
            'generic_mana' => 4,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/f/8f33aaa1-cbaa-40a9-889e-3eca26b3a549.jpg?1576384503',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Assembled Alphas',
            'generic_mana' => 5,
            'type'  => 'Creature',
            'type_name' => 'Wolf',
            'power' => 5,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/6/8603c493-afb0-47a1-b4e3-9848b3824840.jpg?1576384509',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Bedlam Reveler',
            'generic_mana' => 6,
            'type'  => 'Creature',
            'type_name' => 'Creature',
            'power' => 3,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/2/0232f188-44f2-4aee-963c-6f6edc4a21ac.jpg?1576384515',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Blood Mist',
            'generic_mana' => 3,
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/6/a6982bde-1fa3-48fa-803d-a45d6acbc2fe.jpg?1576384521',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Bold Impaler',
            'type'  => 'Creature',
            'type_name' => 'Vampire Knight',
            'power' => 1,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/5/45bb2e6d-2ead-4ce3-8e5e-fc6900435583.jpg?1576384527',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Borrowed Hostility',
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/d/dd91a194-6043-4c2d-afc8-427c38996ef4.jpg?1576384533',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Brazen Wolves',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Wolf',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/b/ab8e2ece-3c66-4f34-9042-fc02639c6a79.jpg?1576384539',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Collective Defiance',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/9/8960883f-3813-412b-9a5b-f8cf8d566fac.jpg?1576384546',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Conduit of Storms',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Werewolf Horror',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/f/7f95145a-41a1-478e-bf8a-ea8838d6f9b1.jpg?1576384557',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Deranged Whelp',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Wolf',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/d/fd06f9eb-112e-458b-83c8-3761df6d60ff.jpg?1576384563',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Distemper of the Blood',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/0/d0ad2acb-073b-4a98-be8c-2ea39ca85496.jpg?1576384569',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Falkenrath Reaver',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Vampire',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/d/cd2023b3-5999-44b1-a67f-3f2a76cb2d14.jpg?1576384576',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Furyblade Vampire',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Vampire Berseker',
            'power' => 1,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/6/56a957d6-fc14-453a-a250-63fc130e330d.jpg?1576384583',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Galvanic Bombardment',
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/c/dc6a4367-bbee-43b8-b5dd-28498f8e2ede.jpg?1576384589',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Hanweir Garrison',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Soldier',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/9/0900e494-962d-48c6-8e78-66a489be4bb2.jpg?1576384595',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Hanweir, the Writhing Township',
            'type'  => 'Legendary Creature',
            'type_name' => 'Eldrazi Ooze',
            'power' => 7,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/7/671fe14d-0070-4bc7-8983-707b570f4492.jpg?1576384296',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Harmless Offering',
            'generic_mana' => 2,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/8/f8f3cc4f-7943-4025-b332-b40653b13014.jpg?1576384600',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Impetuous Devils',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Devil',
            'power' => 6,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/b/1ba7acc0-6ef0-4c34-be23-118e1872271f.jpg?1576384607',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Incendiary Flow',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/f/cf464f61-8a7f-493b-a80f-2f2b0ebd8bf6.jpg?1576384613',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Insatiable Gorgers',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Vampire Berserker',
            'power' => 5,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/b/bb56491b-bad7-44da-8aa5-91ffd875e76a.jpg?1576384618',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Make Mischief',
            'generic_mana' => 2,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/2/a2049072-5901-4edd-8305-ce55f256bca5.jpg?1576384624',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Mirrorwing Dragon',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Dragon',
            'power' => 4,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/b/4b7e33a8-765b-4909-a5c6-5fe8f8774a51.jpg?1576384631',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Nahiris Wrath',
            'generic_mana' => 2,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/e/1e6cb8b0-e3a5-4a94-845d-3b286aa392ac.jpg?1576384637',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Otherworldly Outburst',
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/4/34409e34-04e9-4279-8d21-6ef362b20b72.jpg?1576384643',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Prophetic Ravings',
            'type'  => 'Enchantment',
            'type_name' => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/9/f9e58861-a548-4344-a37b-1c5764b144d9.jpg?1576384652',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Savage Alliance',
            'generic_mana' => 2,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/5/b5255da8-8511-48a7-98e5-ba43ca6e8681.jpg?1576384658',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Shreds of Sanity',
            'generic_mana' => 2,
            'type'  => 'Shreds of Sanity',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/8/782e5600-ac63-4f90-acbe-49c04d2840ee.jpg?1576384664',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Smoldering Werewolf',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Werewolf Horror',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/b/0b0eab47-af62-4ee8-99cf-a864fadade2d.jpg?1576384676',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Spreading Flames',
            'generic_mana' => 6,
            'type'  => 'nstant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/6/c655b1dc-8df1-44c8-a963-bd0a671ec7e5.jpg?1576384682',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Stensia Banquet',
            'generic_mana' => 2,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/2/828db19a-ca0d-4b82-a4b6-451125865093.jpg?1576384688',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Stensia Innkeeper',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Vampire',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/e/ee40c471-70c8-4171-a214-ce932c4c7e2e.jpg?1576384695',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Stromkirk Occultist',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Vampire Horror',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/f/1fa6a443-b23b-48ae-97bb-8fd4deec52c4.jpg?1576384701',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Thermo-Alchemist',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Human Shaman',
            'power' => 0,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/6/c6c194ea-32a5-4683-a6da-4a93d9b4722e.jpg?1576384707',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Vildin-Pack Outcast',
            'generic_mana' => 4,
            'type'  => 'Creature',
            'type_name' => 'Werewolf Horror',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/6/460f7733-c0a6-4439-a313-7b26ae6ee15b.jpg?1576384721',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Weaver of Lightning',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Shaman',
            'power' => 1,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/a/ba1e6885-dca0-4a4b-abb8-0f32680f618d.jpg?1576384728',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Backwoods Survivalists',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Human Warrior',
            'power' => 4,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/a/4a3a65be-0ca1-437f-aafe-d96e8fe428ad.jpg?1576384734',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Bloodbriar',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Plant Elemental',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/9/d9f1d82e-876f-48a6-8153-f02a44cf90a8.jpg?1576384741',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Clear Shot',
            'generic_mana' => 2,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/2/12fa1d34-7e32-45b7-9f6f-68f152f75d1a.jpg?1576384747',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Crop Sigil',
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/6/861e8c51-0cda-497a-b289-a9f678f0e328.jpg?1576384754',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Crossroads Consecrator',
            'type'  => 'Creature',
            'type_name' => 'Human Cleric',
            'power' => 1,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/1/b1a83854-dc45-4c26-aca0-67f372236383.jpg?1576384762',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Eldritch Evolution',
            'generic_mana' => 1,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/f/efcb00e5-2caa-45c8-ad19-05d45c683d16.jpg?1576384769',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Emrakuls Evangel',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Horror',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/1/51c21822-972f-4c20-ac3b-80ba9af101c5.jpg?1576384776',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Emrakuls Influence',
            'generic_mana' => 2,
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/1/112476e7-72ab-4ebc-9e6e-e96fbf5109c0.jpg?1576384782',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Foul Emissary',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Horror',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/1/41446e3b-ecd1-442f-9209-713f0abfc538.jpg?1576384787',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Gnarlwood Dryad',
            'type'  => 'Creature',
            'type_name' => 'Dryad Horror',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/a/fa506387-e538-4b2c-94df-29866eb74a71.jpg?1576384795',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Grapple with the Past',
            'generic_mana' => 1,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/4/d44a77a6-e8a1-4706-886f-8ab3af56b342.jpg?1576384800',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Hamlet Captain',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Human Warrior',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/3/43435939-20cf-49c9-8e37-63681740399b.jpg?1576384807',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Ishkanah, Grafwidow',
            'generic_mana' => 4,
            'type'  => 'Legendary Creature',
            'type_name' => 'Spider',
            'power' => 3,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/a/2a6c5a98-2fe5-4671-a6a8-98a47c09c5a7.jpg?1576384813',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Kessig Prowler',
            'type'  => 'Creature',
            'type_name' => 'Werewolf Horror',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/8/f89f116a-1e8e-4ae7-be39-552e4954f229.jpg?1576384825',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Noose Constrictor',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Snake',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/0/307329cd-a69b-4acf-bcba-83d8306fe7ee.jpg?1576384830',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Permeating Mass',
            'type'  => 'Creature',
            'type_name' => 'Spirit',
            'power' => 1,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/7/b71290eb-b529-4fc3-ab94-fee0ab9e2169.jpg?1576384837',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Prey Upon',
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/f/1f480aab-725d-410a-be06-242361d0be82.jpg?1576384843',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Primal Druid',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Human Druid',
            'power' => 0,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/9/e928f694-c53b-46c5-8390-fa24b53f559c.jpg?1576384851',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Shrill Howler',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Werewolf Horror',
            'power' => 3,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/6/a63c30c0-369a-4a75-b352-edab4d263d1b.jpg?1576384864',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Somberwald Stag',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Elk',
            'power' => 4,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/5/651428a8-27af-4137-84f0-f71274a8b4a6.jpg?1576384872',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Spirit of the Hunt',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Wolf Sprit',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/c/5c5f7b11-49ac-4078-aab7-efe3aff746b2.jpg?1576384878',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Splendid Reclamation',
            'generic_mana' => 3,
            'type'  => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/e/7e17e172-3a46-4957-b711-edc53f70a284.jpg?1576384885',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Springsage Ritual',
            'generic_mana' => 3,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/e/2e0b23a4-5868-4dd8-ae68-846934e1bd52.jpg?1576384891',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Swift Spinner',
            'generic_mana' => 3,
            'type'  => 'Creature',
            'type_name' => 'Spider',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/6/264f78d8-d554-45f3-867e-19dba38e4644.jpg?1576384898',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Tangleclaw Werewolf',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Werewolf Horror',
            'power' => 2,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/e/ee648500-a213-4aa4-a97c-b7223c11bebd.jpg?1576384915',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Ulvenwald Captive',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Werewolf Horror',
            'power' => 1,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/d/0dbaef61-fa39-4ea7-bc21-445401c373e7.jpg?1576449562',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Ulvenwald Observer',
            'generic_mana' => 4,
            'type'  => 'Creature',
            'type_name' => 'Treefolk',
            'power' => 6,
            'toughness' => 6,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/a/7a9d23d5-2f94-48e6-824f-f1de8f742989.jpg?1576384935',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Waxing Moon',
            'generic_mana' => 1,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/1/617f9f3a-61a1-4c73-8efe-3d74fe362901.jpg?1576384942',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Wolfkin Bond',
            'generic_mana' => 4,
            'type'  => 'Enchantment',
            'type_name' => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/4/748f263e-efef-4033-8950-c58fd024a87f.jpg?1576384947',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Woodcutters Grit',
            'generic_mana' => 2,
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/c/cc329134-4b71-4c33-8cfb-c3867a733115.jpg?1576384953',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Woodland Patrol',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Scout',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/a/7a134bd1-3c5a-467e-bad1-65548b33faa5.jpg?1576384959',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Bloodhall Priest',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Vampire Cleric',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/4/c4824cca-0039-4486-be8f-650dac2c8e9f.jpg?1576384968',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Campaign of Vengeance',
            'generic_mana' => 3,
            'type'  => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/2/c284997a-cfc3-4ffc-bc25-00c130fb1eb0.jpg?1576384975',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Gisa and Geralf',
            'generic_mana' => 2,
            'type'  => 'Legendary Creature',
            'type_name' => 'Human Wizard',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/e/2e2c85d8-0bef-40d0-abaf-4555462c29c5.jpg?1576384983',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Grim Flayer',
            'type'  => 'Creature',
            'type_name' => 'Human Warrior',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/2/025af99f-a029-4f99-9c76-676b68821520.jpg?1576384990',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Herons Grace Champion',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Human Knight',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/4/6448b2e2-01b2-4693-b41e-263909dc6a95.jpg?1576384996',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Mercurial Geists',
            'generic_mana' => 2,
            'type'  => 'Creature',
            'type_name' => 'Spirit',
            'power' => 1,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/a/8ab14779-7e79-449c-9a47-6ba219d0dbc5.jpg?1576385002',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Mournwillow',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Plant Skeleton',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/5/45aa37d8-6765-443f-9b70-200fecf8fa1e.jpg?1576385009',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Ride Down',
            'type'  => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/0/c021868f-9ab8-4a52-b12e-3cc35c9d67f0.jpg?1576385014',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Spell Queller',
            'generic_mana' => 1,
            'type'  => 'Creature',
            'type_name' => 'Spirit',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/b/9b76bcd4-580a-4435-afe9-290940b1837f.jpg?1576385020',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Tamiyo, Field Researcher',
            'generic_mana' => 1,
            'type'  => 'Legendary Planeswalker',
            'type_name' => 'Tamiyo',
            'loyalty' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/f/9f9aced7-9ae9-432f-b8c0-caac9cad098b.jpg?1576385026',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Ulrich of the Krallenhorde',
            'generic_mana' => 3,
            'type'  => 'Legendary Creature',
            'type_name' => 'Human Werewolf',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/e/3e2011f0-a640-4579-bd67-1dfbc09b8c09.jpg?1576385037',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Cathars Shield',
            'generic_mana' => 0,
            'type'  => 'Artifact',
            'type_name' => 'Equipment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/1/61c18ffa-ffff-4dc4-9db0-d5f183c35e17.jpg?1576385043',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Cryptolith Fragment',
            'generic_mana' => 3,
            'type'  => 'Artifact',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/7/078b2103-15ce-456d-b092-352fa7222935.jpg?1576385054',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Cultists Staff',
            'generic_mana' => 2,
            'type'  => 'Artifact',
            'type_name' => 'Equipment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/d/8da8c523-44e8-43e7-8431-28dbed1015ac.jpg?1576385059',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Field Creeper',
            'generic_mana' => 2,
            'type'  => 'Artifact Creature',
            'type_name' => 'Scarecrow',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/b/3b92b162-f51d-4138-8d9b-e5eb929ad87e.jpg?1576385064',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Geist-Fueled Scarecrow',
            'generic_mana' => 4,
            'type'  => 'Artifact Creature',
            'type_name' => 'Scarecrow',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/9/89c9cafb-4543-409f-a98a-df0e7a0f2749.jpg?1576385070',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Lupine Prototype',
            'generic_mana' => 2,
            'type'  => 'Artifact Creature',
            'type_name' => 'Wolf Construct',
            'power' => 5,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/d/dd8272ca-8e3d-4980-99f2-352a1db76d74.jpg?1576385076',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Slayers Cleaver',
            'generic_mana' => 3,
            'type'  => 'Artifact',
            'type_name' => 'Equipment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/d/9de4a83a-3a0c-4174-ba65-a6e100383b32.jpg?1576385082',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Soul Separator',
            'generic_mana' => 3,
            'type'  => 'Artifact',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/b/eb9b1158-dfc4-4fe9-b970-338be8a99662.jpg?1576385089',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Stitchers Graft',
            'generic_mana' => 1,
            'type'  => 'Artifact',
            'type_name' => 'Equipment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/b/eb6d700e-0514-41d7-9255-cedd859316fc.jpg?1576385095',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Terrarion',
            'generic_mana' => 1,
            'type'  => 'Artifact',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/2/72fae696-0db9-4a87-8a88-b4298da01a19.jpg?1576385100',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Thirsting Axe',
            'generic_mana' => 3,
            'type'  => 'Artifact',
            'type_name' => 'Equipment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/4/f47e5303-c07a-4be0-a314-bf5739a856e5.jpg?1576385105',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Geier Reach Sanitarium',
            'type'  => 'Legendary Land',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/6/96093739-fedc-4d8f-a29d-0e57f571e5a9.jpg?1576385111',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Hanweir Battlements',
            'type'  => 'Land',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/d/1d743ad6-6ca2-409a-9773-581cc195dbf2.jpg?1611054060',          
        ]);

        DB::table('card')->insert([
            'set' => 'EldritchMoon',
            'name' => 'Nephalia Academy',
            'type'  => 'Land',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/9/2/9243eb5b-905e-446f-9ee0-7557e3b31db3.jpg?1576385121',          
        ]);

        // AETHER REVOLT

        // DB::table('card')->insert([
        //     'set' => 'AetherRevolt',
        //     'name' => '',
        //     'generic_mana' => ,
        //     'type' => '',
        //     'type_name'  => '',
        //     'power' => ,
        //     'toughness' => ,
        //     'image' => '',          
        // ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Aerial Modification',
            'generic_mana' => 4,
            'type' => 'Enchantment',
            'type_name'  => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/8/b89cab47-25fb-49ea-bb43-90a0089b6b20.jpg?1576381258',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Aeronaut Admiral',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Human Pilot',
            'power' => 3,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/f/ff15c06c-160d-4960-92d5-6f8e7b33f051.jpg?1576381266',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Aether Inspector',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Dwarf Artificer',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/5/f5dcbe97-d582-464e-98e7-dd06d8652606.jpg?1576381273',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Aethergeode Miner',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Dwarf Scout',
            'power' => 3,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/0/80bb3abd-ebaf-4dc2-97eb-ed4a2b005177.jpg?1576381279',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Airdrop Aeronauts',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Dwarf Scout',
            'power' => 4,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/9/49827a57-cf10-4a44-a1fd-ac611da39dc9.jpg?1576381286',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Alley Evasion',
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/c/bc10173d-25ff-4734-b8f2-84f94fe52b17.jpg?1576381293',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Audacious Infiltrator',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Dwarf Rogue',
            'power' => 3,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/6/36a348bb-cdc5-4e2a-933f-21f91faab891.jpg?1576381301',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Bastion Enforcer',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Dwarf Soldier',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/8/88b9c0f7-d49b-4d74-9038-44954054ce21.jpg?1576381312',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Call for Unity',
            'generic_mana' => 3,
            'type' => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/e/eeca4557-98aa-433b-a3ee-050e4a3e6d88.jpg?1576381320',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Caught in the Brights',
            'generic_mana' => 2,
            'type' => 'Enchantment',
            'type_name'  => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/d/4d5bea27-d825-4691-8ae0-c4831574ec53.jpg?1576381329',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Consulate Crackdown',
            'generic_mana' => 3,
            'type' => 'Enchantment',
            'type_name'  => '',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/2/02fb7a26-fbf0-4b91-847b-cfc46e01a342.jpg?1576381336',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Conviction',
            'generic_mana' => 1,
            'type' => 'Enchantment',
            'type_name'  => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/f/4f805e97-c28b-4780-b204-74514c0c47d2.jpg?1576381344',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Countless Gears Renegade',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Dwarf Artificer',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/2/c2d6f334-0040-42b1-9c72-362e4dcaa65e.jpg?1576381353',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Dawnfeather Eagle',
            'generic_mana' => 4,
            'type' => 'Creature',
            'type_name'  => 'Bird',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/7/f7113ddc-cb3c-46da-a6c7-2567bd0affa9.jpg?1576381360',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Deadeye Harpooner',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Dwarf Warrior',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/0/a018decf-25e1-45fc-be7d-2523dcfb7a4c.jpg?1576381367',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Decommission',
            'generic_mana' => 2,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/c/1cca66e9-be21-4fc7-8951-cd99e9b213dc.jpg?1576381374',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Deft Dismissal',
            'generic_mana' => 3,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/c/5cb26d5b-ffeb-4dac-ad61-f85e5e7b1675.jpg?1576381381',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Exquisite Archangel',
            'generic_mana' => 5,
            'type' => 'Creature',
            'type_name'  => 'Angel',
            'power' => 5,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/0/d04018c9-510c-4610-9daa-677434628805.jpg?1576381389',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Felidar Guardian',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Cat Beast',
            'power' => 1,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/4/44bdbed8-5d21-4bf5-8a32-9623b1139c85.jpg?1576381396',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Ghirapur Osprey',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Bird',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/1/2186f382-2d68-4191-b490-a072f49eaabf.jpg?1576381402',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Restoration Specialist',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Dwarf Artificer',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/3/63682db3-1a56-4d8e-a9b7-04465a577518.jpg?1576381409',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Solemn Recruit',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Dwarf Warrior',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/9/5990c2f1-94d7-4d2e-b1ad-6406c25b91aa.jpg?1576381416',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Sram, Senior Edificer',
            'generic_mana' => 1,
            'type' => 'Legendary Creature',
            'type_name'  => 'Dwarf Advisor',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/b/1b323e2c-59dd-4d70-9a48-b10f807bb818.jpg?1576381423',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Srams Expertise',
            'generic_mana' => 2,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/c/7c6d47b0-4c19-4c19-9e21-54cd87a5e34d.jpg?1576381430',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Thopter Arrest',
            'generic_mana' => 2,
            'type' => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/4/a4e738cb-e4ea-41c2-99a1-55b6167eccb0.jpg?1576381436',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Aether Swooper',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Vedalken Artificer',
            'power' => 1,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/c/8c34dbe3-3a66-40b3-a5c2-c2d6acb47773.jpg?1576381441',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Aethertide Whale',
            'generic_mana' => 4,
            'type' => 'Creature',
            'type_name'  => 'Whale',
            'power' => 6,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/8/38722c25-13a7-47af-a4cd-90722f289499.jpg?1576381449',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Baral, Chief of Compliance',
            'generic_mana' => 1,
            'type' => 'Legendary Creature',
            'type_name'  => 'Human Wizard',
            'power' => 1,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/0/60e16d94-1166-4050-8554-686e153a7f80.jpg?1576381454',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Barals Expertise',
            'generic_mana' => 3,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/2/d273f5b7-b3a3-485a-acc8-34e10a504646.jpg?1576381459',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Bastion Inventor',
            'generic_mana' => 5,
            'type' => 'Creature',
            'type_name'  => 'Vedalken Artificer',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/8/5/856f804d-0213-4b86-bc6a-6a0a1147c4f9.jpg?1576381465',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Disallow',
            'generic_mana' => 1,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/5/25f05814-a5a5-460f-9d29-0ab03efecf4c.jpg?1576381471',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Dispersal Technician',
            'generic_mana' => 4,
            'type' => 'Creature',
            'type_name'  => 'Vedalken Artificer',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/d/5d93a915-ffea-4f50-88ac-2b3253f7dfdf.jpg?1576381476',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Efficient Construction',
            'generic_mana' => 3,
            'type' => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/b/abfbe1d5-beb7-49b8-a504-f1cc47ee4731.jpg?1576381482',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Hinterland Drake',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Drake',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/1/418448d0-3e8d-4581-b598-696165775d23.jpg?1576381488',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Ice Over',
            'generic_mana' => 1,
            'type' => 'Enchantment',
            'type_name'  => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/0/c01d2835-060c-4ac3-b586-84811878a64d.jpg?1576381494',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Illusionists Stratagem',
            'generic_mana' => 3,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/7/a7eede83-6f1b-4054-b01c-0da17b197bad.jpg?1576381501',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Leave in the Dust',
            'generic_mana' => 3,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/c/3c01bd77-beb0-4a26-858d-022311e550bf.jpg?1576381508',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Mechanized Production',
            'generic_mana' => 2,
            'type' => 'Enchantment',
            'type_name'  => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/3/235dd8f1-215a-4b0a-9e94-0d0d5a3c730b.jpg?1576381513',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Metallic Rebuke',
            'generic_mana' => 2,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/7/f712ac26-dca4-459b-84c1-010597007f60.jpg?1576381519',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Negate',
            'generic_mana' => 1,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/b/cb142515-0856-441d-84d4-9c9d450a86e9.jpg?1576381530',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Quicksmith Spy',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Human Artificer',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/f/0f922e87-1744-4966-9e3a-54917f7f3d9e.jpg?1576381538',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Reverse Engineer',
            'generic_mana' => 3,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/5/d56f8cca-6b8f-45ea-926f-161938716ee9.jpg?1576381545',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Salvage Scuttler',
            'generic_mana' => 4,
            'type' => 'Creature',
            'type_name'  => 'Crab',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/8/480be626-cf37-410d-a9c7-e5464345085f.jpg?1576381551',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Shielded Aether Thief',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Vedalken Rogue',
            'power' => 0,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/3/e34be31b-eeb4-40e5-acf7-6cd0ba6d4bcf.jpg?1576381558',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Shipwreck Moray',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Fish',
            'power' => 0,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/8/284c6de3-4e09-40d9-afdb-89ff08e1844b.jpg?1576381563',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Skyship Plunderer',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Human Pirate',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/f/1fedbc91-67e4-40d6-b307-7e6197f47c6e.jpg?1576381570',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Take into Custody',
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/4/b412718a-7bc7-4b16-af60-1b955c820b0f.jpg?1576381577',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Trophy Mage',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Human Wizard',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/1/9/19754fe4-2f61-42a3-afa2-3a6a8257b81b.jpg?1576381584',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Whir of Invention',
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/2/0279fd3c-9252-4958-9d7a-5f33aa25907e.jpg?1576381590',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Wind-Kin Raiders',
            'generic_mana' => 4,
            'type' => 'Creature',
            'type_name'  => 'Human Artificer',
            'power' => 4,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/b/fbfaa040-61fd-4705-a7ee-c67b49f740e3.jpg?1576381595',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Aether Poisoner',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Human Artificer',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/9/c9b217f1-1621-40d1-8a98-24c1f7cba800.jpg?1576381601',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Alley Strangler',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Aetherborn Rogue',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/1/a131d558-5f6b-448b-a378-1882e2d02bd2.jpg?1576381609',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Battle at the Bridge',
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/4/74d8b644-4cca-451e-a46c-5237c13bf373.jpg?1576381615',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Cruel Finality',
            'generic_mana' => 2,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/c/5c22e911-cf40-4ed8-b075-186f2b1393db.jpg?1576381620',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Daring Demolition',
            'generic_mana' => 2,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/6/a6378898-50b7-47c9-8c25-dc660606be9f.jpg?1576381626',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Defiant Salvager',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Aetherborn Artificer',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/a/0afbfb2c-3f1a-4ef9-9f61-6ca51af853d8.jpg?1576381632',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Fatal Push',
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/5/b5e81649-9954-424c-89d1-f87d73b66047.jpg?1595869185',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Fen Hauler',
            'generic_mana' => 6,
            'type' => 'Creature',
            'type_name'  => 'Insect',
            'power' => 5,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/5/b5ef4616-e3c2-4448-83b1-f7d439705eaf.jpg?1576381648',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Foundry Hornet',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Insect',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/6/f6dc7865-16ed-4d12-bdb4-d40fbdd48a23.jpg?1576381654',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Fourth Bridge Prowler',
            'type' => 'Creature',
            'type_name'  => 'Human Rogue',
            'power' => 1,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/3/73aaaa09-c985-42f8-b426-06fd3b8de66d.jpg?1576381661',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Gifted Aetherborn',
            'type' => 'Creature',
            'type_name'  => 'Aetherborn Vampire',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/b/abceb4fd-e3c5-400d-af7a-6dd17108a4b4.jpg?1576381667',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Glint-Sleeve Siphoner',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Human Rogue',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/1/315976db-4cab-4393-8386-ce3b0ae3f490.jpg?1576381673',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Gontis Machinations',
            'type' => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/c/6c97f5a9-6e04-45c3-aa8d-dcf0fd81d5b9.jpg?1576381678',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Herald of Anguish',
            'generic_mana' => 5,
            'type' => 'Creature',
            'type_name'  => 'Demon',
            'power' => 5,
            'toughness' => 5,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/1/31a69ebe-4229-4067-8414-381b123fe63c.jpg?1576381686',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Ironclad Revolutionary',
            'generic_mana' => 4,
            'type' => 'Creature',
            'type_name'  => 'Aetherborn Artificer',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/3/43a5535b-b1d1-4648-aa72-4f64e9fcd95d.jpg?1576381694',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Midnight Entourage',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Aetherborn Rogue',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/8/2838c6dd-d816-4363-a861-f2f8052d1430.jpg?1576381699',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Night Market Aeronaut',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Aetherborn Warrior',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/6/2637f860-01dd-4559-97b3-71c2e7cdbca4.jpg?1576381705',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Perilous Predicament',
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/0/f0edc708-0c76-4fcd-a175-d9c6f1ca3ac1.jpg?1576381711',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Renegades Getaway',
            'generic_mana' => 2,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/9/49b0a5d5-99d7-492b-bd85-77c3cee12c8d.jpg?1576381717',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Resourceful Return',
            'generic_mana' => 1,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/2/32f57d0b-ab6a-4074-885d-678659729b8a.jpg?1576381722',          
        ]);

        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Secret Salvage',
            'generic_mana' => 3,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/9/d9b9f3e2-b5e8-4234-aaf3-5f1938a20c78.jpg?1576381728',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Sly Requisitioner',
            'generic_mana' => 4,
            'type' => 'Creature',
            'type_name'  => 'Human Artificer',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/2/c2d05324-6d85-40da-a087-b5822bc8f42e.jpg?1576381733',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Vengeful Rebel',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Aetherborn Warrior',
            'power' => 3,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/6/e/6e34edfc-77fc-43b5-bad6-1c4c2a76c8c3.jpg?1576381739',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Yahenni, Undying Partisan',
            'generic_mana' => 2,
            'type' => 'Legendary Creature',
            'type_name'  => 'Aetherborn Vampire',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/c/3/c37e2466-57c3-453f-aebe-340995f2eca7.jpg?1576381745',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Yahennis Expertise',
            'generic_mana' => 2,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/f/2/f2f28735-122c-45ba-bde5-decfd9b11b32.jpg?1576381752',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Aether Chaser',
            'generic_mana' => 1,
            'type' => 'Creature',
            'type_name'  => 'Human Artificer',
            'power' => 2,
            'toughness' => 1,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/9/290cde84-d97a-4737-aff2-c443a4e43f7d.jpg?1576381759',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Chandras Revolution',
            'generic_mana' => 3,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/f/2fcee99c-72a0-4db1-b4c9-65c878284450.jpg?1576381766',          
        ]);
        
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Destructive Tampering',
            'generic_mana' => 2,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/0/0/00154b70-57d2-4c32-860f-1c36fc49b10c.jpg?1576381772',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Embraal Gear-Smasher',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Human Warrior',
            'power' => 2,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/a/3ad5c175-581c-4fdd-b008-e7d10b0928c7.jpg?1576381778',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Enraged Giant',
            'generic_mana' => 5,
            'type' => 'Creature',
            'type_name'  => 'Giant',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/0/40dc3b59-baae-4bf0-b5ce-fa9a915af066.jpg?1576381784',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Freejam Regent',
            'generic_mana' => 4,
            'type' => 'Creature',
            'type_name'  => 'Dragon',
            'power' => 4,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/d/6/d6b5147f-b422-47d3-98a0-dcc2d6f4e17a.jpg?1576382131',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Frontline Rebel',
            'generic_mana' => 2,
            'type' => 'Creature',
            'type_name'  => 'Human Warrior',
            'power' => 3,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/7/b742738a-2663-474d-b75a-28f1f67dc335.jpg?1576381795',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Gremlin Infestation',
            'generic_mana' => 3,
            'type' => 'Enchantment',
            'type_name'  => 'Aura',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/b/5/b51438f5-c4d4-434a-b7ea-dee0b60303e4.jpg?1576381801',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Hungry Flames',
            'generic_mana' => 2,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/4/c/4ca23676-f36f-4266-ba4f-5e9ebf3adb57.jpg?1592419490',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Indomitable Creativity',
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/d/edd00e45-2ae1-4cd0-92a1-155c95f8dc72.jpg?1576381816',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Invigorated Rampage',
            'generic_mana' => 1,
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/2/c/2c1d1727-99d4-4aee-b6f5-8399ac1d0184.jpg?1576381826',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Kari Zev, Skyship Raider',
            'generic_mana' => 1,
            'type' => 'Legendary Creature',
            'type_name'  => 'Human Pirate',
            'power' => 1,
            'toughness' => 3,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/7/2/72495879-39ce-449d-ad2f-ef32ea46f3aa.jpg?1576381833',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Kari Zevs Expertise',
            'generic_mana' => 1,
            'type' => 'Sorcery',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/a/b/ab5c7400-6307-4c51-88b8-9c0232110714.jpg?1576381839',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Lathnu Sailback',
            'generic_mana' => 4,
            'type' => 'Creature',
            'type_name'  => 'Lizard',
            'power' => 5,
            'toughness' => 4,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/3/33998799-f31b-4522-93b2-0c34c570ebf7.jpg?1576381845',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Lightning Runner',
            'generic_mana' => 3,
            'type' => 'Creature',
            'type_name'  => 'Human Warrior',
            'power' => 2,
            'toughness' => 2,
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/e/5/e5d9c7eb-dca4-4471-a91f-a5aad3a69c2f.jpg?1576381851',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Pias Revolution',
            'generic_mana' => 2,
            'type' => 'Enchantment',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/5/1/51da6ff6-4d81-488e-83ff-8758f6c7bb9f.jpg?1576381857',          
        ]);
         
        DB::table('card')->insert([
            'set' => 'AetherRevolt',
            'name' => 'Precise Strike',
            'type' => 'Instant',
            'image' => 'https://c1.scryfall.com/file/scryfall-cards/large/front/3/c/3cd2e7ab-b63e-48e8-a32a-6ff8673241d9.jpg?1576381864',          
        ]);


    }
}
