<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenotypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
        INSERT INTO `genotypes` (`id`, `name`) VALUES
            (1, 'AA/A+'),
            (2, 'AA/A-'),
            (3, 'AA/B+'),
            (4, 'AA/B-'),
            (5, 'AA/AB+'),
            (6, 'AA/AB-'),
            (7, 'AA/O+'),
            (8, 'AA/O-'),
            (9, 'AC/A+'),
            (10, 'AC/A-'),
            (11, 'AC/B+'),
            (12, 'AC/B-'),
            (13, 'AC/AB+'),
            (14, 'AC/AB-'),
            (15, 'AC/O+'),
            (16, 'AC/O-'),
            (17, 'AS/A+'),
            (18, 'AS/A-'),
            (19, 'AS/B+'),
            (20, 'AS/B-'),
            (21, 'AS/AB+'),
            (22, 'AS/AB-'),
            (23, 'AS/O+'),
            (24, 'AS/O-'),
            (25, 'SS/A+'),
            (26, 'SS/A-'),
            (27, 'SS/B+'),
            (28, 'SS/B-'),
            (29, 'SS/AB+'),
            (30, 'SS/AB-'),
            (31, 'SS/O+'),
            (32, 'SS/O-')
        ");
    }
}
