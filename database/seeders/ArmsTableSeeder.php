<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classes\Arm;

class ArmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Arm::create([
            'arm' => strtoupper('A'),
            'created_by' => 1
        ]);
        Arm::create([
            'arm' => strtoupper('b'),
            'created_by' => 1
        ]);
        Arm::create([
            'arm' => 'C',
            'created_by' => 1
        ]);
    }
}
