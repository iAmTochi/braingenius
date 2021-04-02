<?php
namespace Database\Seeders;
use App\Models\Classes\Subject;
use App\Models\Classes\Department;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dept1 = Department::create([
            'dept_name' => strtoupper('Science'),
            'created_by' => 1,

        ]);

        $dept2 = Department::create([
            'dept_name' => strtoupper('Commercial'),
            'created_by' => 1,

        ]);

        Subject::create([
            'full_name' => ucfirst('Biology'),
            'short_name' => 'BIO',
            'dept_uuid' =>$dept1->uuid,
            'created_by' => 1,

        ]);

        Subject::create([
            'full_name' => ucfirst('Mathematics'),
            'short_name' => 'MATHS',
            'dept_uuid' =>$dept1->uuid,
            'created_by' => 1,

        ]);

        Subject::create([
            'full_name' => ucfirst('Commerce'),
            'short_name' => 'COMM',
            'dept_uuid' =>$dept2->uuid,
            'created_by' => 1,

        ]);
    }
}
