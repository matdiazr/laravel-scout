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
        //for laravel 6 o mayor
        // $this->call(PostTableSeeder);
        $this->call(PostTableSeeder::class);
    }
}
