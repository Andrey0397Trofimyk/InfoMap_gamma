<?php

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
        $this->call(UsersSeeder::class);
        $this->call(LocationsSeeder::class);
        $this->call(ReviewsSeeder::class);
        $this->call(ImagesSeeder::class);
    }
}