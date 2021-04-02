<?php
namespace Database\Seeders;

use App\Models\User\Type;
use App\Models\User\Admin;
use App\Models\House\SportHouse;
use App\Models\Sessions\Session;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('username','code_tochi')->first();

        if(!$user){

            $dev = User::create([
                'username' => 'code_tochi',
                'type'=> 'lvl05',
                'status' => true,
                'password' => Hash::make('11111111'),
            ]);

            Type::create([
                'name' => 'Super Admin',
                'code' => 'lvl05',
                'created_by' => $dev->uuid,
            ]);
            Type::create([
                'name' => 'Regular Admin',
                'code' => 'lvl04',
                'created_by' => $dev->uuid,
            ]);
            Type::create([
                'name' => 'Staff',
                'code' => 'lvl03',
                'created_by' => $dev->uuid,
            ]);
            Type::create([
                'name' => 'Parent',
                'code' => 'lvl02',
                'created_by' => $dev->uuid,
            ]);
            Type::create([
                'name' => 'Student',
                'code' => 'lvl01',
                'created_by' => $dev->uuid,
            ]);

            Admin::create([
                'user_uuid' => $dev->uuid,
                'last_name' => 'Ugwu',
                'first_name' => 'Tochukwu',
                'other_name' => 'Kelvin',
                'email' => 'ugwukelvintochukwu@gmail.com',
                'phone'=> '08036037038',
                'address'=> '8 Oba Fatai Aleiru Street, Lagos',
                'dob' => '1991-01-24',
                'gender'=> 'M',
                'image'=> 'passport/admin/tochi.jpg',
                'created_by'=>$dev->uuid,

            ]);

            SportHouse::create([
                'name' => 'Bishop Chukwuma',
                'colour' => strtoupper('green'),
                'created_by'=>$dev->uuid,

            ]);

            SportHouse::create([
                'name' => 'Dumebi',
                'colour' => strtoupper('red'),
                'created_by'=>$dev->uuid,

            ]);

            SportHouse::create([
                'name' => 'Okpara',
                'colour' => strtoupper('blue'),
                'created_by'=>$dev->uuid,

            ]);

            SportHouse::create([
                'name' => 'Awolowo',
                'colour' => strtoupper('Yellow'),
                'created_by'=>$dev->uuid,

            ]);


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
                'created_by'=>$dev->uuid,

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
                'created_by'=>$dev->uuid,

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
                'created_by'=>$dev->uuid,

            ]);


        }
    }
}
