<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas;

class CreatePetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'fnsli',
                'nama' => 'Fansoli',
                'password' => bcrypt('osol123'),
                'telp' => '0898989898989',
                'level' => 'bagianti',
            ],
            [
                'username' => 'hime',
                'nama' => 'Itchy',
                'password' => bcrypt('aamiin'),
                'telp' => '0898989898989',
                'level' => 'administrasi',
            ],
        ];

        foreach ($users as $key => $val){
            Petugas::create($val);
        }
    }
}
