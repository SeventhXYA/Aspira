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
            'divisi' => '-'
        ]);

        Divisi::create([
            'divisi' => 'Digital Printing (Meta Print)'
        ]);

        Divisi::create([
            'divisi' => 'UKM Center'
        ]);

        Divisi::create([
            'divisi' => 'Urban Farming (Vertonik Farm)'
        ]);

        Divisi::create([
            'divisi' => 'Konveksi (Samara Apprarel)'
        ]);

        Divisi::create([
            'divisi' => 'Workshop Permata & Training Center'
        ]);

        Divisi::create([
            'divisi' => 'Cafe : Coffe & Eatery (Biruni Cafe)'
        ]);

        Divisi::create([
            'divisi' => 'Nursery & Revegetasi (Bentala Nursery)'
        ]);

        Divisi::create([
            'divisi' => 'Sentra Pertanian Terpadu (Tim Maggot & Agro Buah)'
        ]);

        Level::create([
            'level' => 'Super Admin'
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
