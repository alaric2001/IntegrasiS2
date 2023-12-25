<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conveyor;

class ConveyorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conveyor::create([
            'nama' => 'Asus Conveyor',
            'tipe' => 'C-001',
            'status' => 'Work',
            'kapasitas' => 50.5,
        ]);
        Conveyor::create([
            'nama' => 'Apple Conveyor',
            'tipe' => 'C-0052',
            'status' => 'Off',
            'kapasitas' => 60.1,
        ]);
        Conveyor::create([
            'nama' => 'Samsung Conveyor',
            'tipe' => 'C-023',
            'status' => 'Work',
            'kapasitas' => 80.5,
        ]);
        Conveyor::create([
            'nama' => 'Xiaomi Conveyor',
            'tipe' => 'C-444',
            'status' => 'Maintenance',
            'kapasitas' => 37.5,
        ]);
        Conveyor::create([
            'nama' => 'Advan Conveyor',
            'tipe' => 'C-455',
            'status' => 'Work',
            'kapasitas' => 37.5,
        ]);
    }
}
