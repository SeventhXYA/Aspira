<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Users;
use App\Models\Divisi;
use App\Models\Gender;
use App\Models\Level;

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
    }
}
