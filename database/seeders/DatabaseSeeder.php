<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // If want to insert data by using Seeder
        $this->call(UserTableSeeder::class);
        $this->call(FormTableSeeder::class);

    }
}
