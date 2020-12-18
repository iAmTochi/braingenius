<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
        INSERT INTO `religions` (`id`, `name`) VALUES
            (1, 'Christianity'),
            (2, 'Islam'),
            (3, 'Others')
        ");
    }
}
