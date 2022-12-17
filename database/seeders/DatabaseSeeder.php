<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bulan;
use Illuminate\Database\Seeder;
// use App\Models\Users;
use App\Models\Divisi;
use App\Models\Gender;
use App\Models\Level;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Divisi::create([
            'divisi' => 'Admin'
        ]);

        Divisi::create([
            'divisi' => 'Divisi A'
        ]);

        Divisi::create([
            'divisi' => 'Divisi B'
        ]);

        Level::create([
            'level' => 'Admin'
        ]);
        Level::create([
            'level' => 'User'
        ]);

        Gender::create([
            'gender' => 'Laki-Laki'
        ]);
        Gender::create([
            'gender' => 'Perempuan'
        ]);

        Bulan::create([
            'bulan' => 'Januari'
        ]);
        Bulan::create([
            'bulan' => 'Februari'
        ]);
        Bulan::create([
            'bulan' => 'Maret'
        ]);
        Bulan::create([
            'bulan' => 'April'
        ]);
        Bulan::create([
            'bulan' => 'Mei'
        ]);
        Bulan::create([
            'bulan' => 'Juni'
        ]);
        Bulan::create([
            'bulan' => 'Juli'
        ]);
        Bulan::create([
            'bulan' => 'Agustus'
        ]);
        Bulan::create([
            'bulan' => 'September'
        ]);
        Bulan::create([
            'bulan' => 'Oktober'
        ]);
        Bulan::create([
            'bulan' => 'November'
        ]);
        Bulan::create([
            'bulan' => 'Desember'
        ]);
    }
}
