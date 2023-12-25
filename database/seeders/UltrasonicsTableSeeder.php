<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ultrasonic;

class UltrasonicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ultrasonic::create([
            'nama' => 'Realme Ultrasonic',
            'tipe' => 'U-111',
            'status' => 'Work',
        ]);
        Ultrasonic::create([
            'nama' => 'Oppo Ultrasonic',
            'tipe' => 'U-213',
            'status' => 'Work',
        ]);
        Ultrasonic::create([
            'nama' => 'Vivo Ultrasonic',
            'tipe' => 'U-333',
            'status' => 'Work',
        ]);
        Ultrasonic::create([
            'nama' => 'Nokia Ultrasonic',
            'tipe' => 'U-144',
            'status' => 'Off',
        ]);
        Ultrasonic::create([
            'nama' => 'Sony Ultrasonic',
            'tipe' => 'U-545',
            'status' => 'Maintenance',
        ]);
    }
}
