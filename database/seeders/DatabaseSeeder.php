<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD

        $this->call([
            UserTableSeeder::class,
            SetsTableSeeder::class,
            CardsTableSeeder::class,
=======
        $this->call([
            CardSetSeeder::class,
            CardSeeder::class
>>>>>>> dev
        ]);
    }
}
