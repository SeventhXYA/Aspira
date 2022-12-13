<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [

                'name' => 'Satria Kurniawan',
                'gender_id' => 1,
                'divisi_id' => 1,
                'nohp' => '082254388310',
                'username' => 'satria',
                'email' => 'satirakurniawan@gmail.com',
                'password' => bcrypt('1234'),
                'level_id' => 1,
                'address' => 'Jl. Karya Bersama, RT.19'
            ],
            [

                'name' => 'Ali Zainal',
                'gender_id' => 1,
                'divisi_id' => 2,
                'nohp' => '085392888300',
                'username' => 'ali',
                'email' => 'alizayn@gmail.com',
                'password' => bcrypt('qwerty'),
                'level_id' => 2,
                'address' => 'Jl. Karantika, RT.01'
            ],
            [

                'name' => 'Agung Budi',
                'gender_id' => 1,
                'divisi_id' => 3,
                'nohp' => '0833222333450',
                'username' => 'agung',
                'email' => 'agungbud@gmail.com',
                'password' => bcrypt('zxcv'),
                'level_id' => 2,
                'address' => 'Jl. Karang Bersama, RT.61'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
