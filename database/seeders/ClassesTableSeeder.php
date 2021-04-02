<?php
namespace Database\Seeders;

use App\Models\Classes\Classes;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::create([
            'name' => 'JSS1',
            'hierarchy' => 1,

        ]);

        Classes::create([
            'name' => 'JSS2',
            'hierarchy' => 2,

        ]);

        Classes::create([
            'name' => 'JSS3',
            'hierarchy' => 3,

        ]);
        Classes::create([
            'name' => 'SS1',
            'hierarchy' => 4,

        ]);
        Classes::create([
            'name' => 'SS2',
            'hierarchy' => 5,

        ]);
        Classes::create([
            'name' => 'SS3',
            'hierarchy' => 6,

        ]);
    }
}
