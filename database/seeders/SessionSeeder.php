<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Sessions\Session;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Session::create([
            'start_year' => 2019,
            'end_year' => 2020,
            'session' => '2019/2020',
            'term' => 'First',
            'term_no' => 1,
            'session_start' => '2019-09-01',
            'session_end' => '2019-12-13',
            'status' => 1,
            'access_result' => 0,

        ]);

        Session::create([
            'start_year' => 2019,
            'end_year' => 2020,
            'session' => '2019/2020',
            'term' => 'Second',
            'term_no' => 2,
            'session_start' => '2020-01-11',
            'session_end' => '2020-04-13',
            'status' => 0,
            'access_result' => 0,

        ]);

        Session::create([
            'start_year' => 2019,
            'end_year' => 2020,
            'session' => '2019/2020',
            'term' => 'Third',
            'term_no' => 3,
            'session_start' => '2020-05-22',
            'session_end' => '2020-08-9',
            'status' => 0,
            'access_result' => 0,

        ]);


    }
}
