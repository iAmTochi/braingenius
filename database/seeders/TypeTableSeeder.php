<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'type_name' => 'Tochukwu Ugwu',
            'type_name' => true,
            'email' => 'ugwukelvintochukwu@gmail.com',
            'password' => Hash::make('11111111'),
        ]);
    }
}
