<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'NIM' => 2440030185,
            'nama' => 'Andrew Wiguna',
            'jenis_kelamin' => 'Laki-Laki'
            'jurusan' => 'Magister Teknik Informatika',
            'alamat' => 'Cawang, Jakarta Timur'
        ]);
        
        Mahasiswa::create([
            'NIM' => 2440064476,
            'nama' => 'Astrid',
            'jenis_kelamin' => 'Perempuan'
            'jurusan' => 'Magister Teknik Informatika',
            'alamat' => 'Jakarta'
        ]);
        
        Mahasiswa::create([
            'NIM' => 2440050981,
            'nama' => 'Joel Rizky Wahidiyat',
            'jenis_kelamin' => 'Laki-Laki'
            'jurusan' => 'Magister Teknik Informatika',
            'alamat' => 'Depok, Jakarta'
        ]);
        
        Mahasiswa::create([
            'NIM' => 2440048283,
            'nama' => 'Joelry Keegan tarigan',
            'jenis_kelamin' => 'Laki-Laki'
            'jurusan' => 'Magister Teknik Informatika',
            'alamat' => 'Jakarta'
        ]);
    }
}
