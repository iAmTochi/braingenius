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
        $this->call(UsersTableSeeder::class);
        $this->call(ArmsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(LgaSeeder::class);
        $this->call(GenotypeSeeder::class);
        $this->call(ReligionSeeder::class);
        $this->call(ResidenceSeeder::class);
    }
}
