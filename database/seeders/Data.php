<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;

class Data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'pict' => 'user.jpg',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'gender_id' => 1,
            'tempatlahir' => 'Sungai Danau',
            'tanggallahir' => '05',
            'bulan_id' => 8,
            'tahunlahir' => '2002',
            'nohp' => '082254388310',
            'email' => 'deathcrew17@gmail.com',
            'address' => 'Jl. Karya Bersama, RT.19',
            'divisi_id' => 1,
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'level_id' => 1,

        ]);
        User::create([
            'pict' => 'user.jpg',
            'firstname' => 'Satria',
            'lastname' => 'Kurniawan',
            'gender_id' => 1,
            'tempatlahir' => 'Sungai Danau',
            'tanggallahir' => '05',
            'bulan_id' => 8,
            'tahunlahir' => '2002',
            'nohp' => '082254388310',
            'email' => 'satirakurniawan@gmail.com',
            'address' => 'Jl. Karya Bersama, RT.19',
            'divisi_id' => 1,
            'username' => 'satria',
            'password' => bcrypt('1234'),
            'level_id' => 2,

        ]);
        User::create([
            'pict' => 'user.jpg',
            'firstname' => 'Ali',
            'lastname' => ' Zainal',
            'gender_id' => 1,
            'tempatlahir' => 'Sungai Baru',
            'tanggallahir' => '13',
            'bulan_id' => 2,
            'tahunlahir' => '2001',
            'nohp' => '082215233211',
            'email' => 'alizayn@gmail.com',
            'address' => 'Jl. Karya Sendiri, RT.20',
            'divisi_id' => 2,
            'username' => 'ali',
            'password' => bcrypt('1234'),
            'level_id' => 3,
        ]);
    }
}
