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
