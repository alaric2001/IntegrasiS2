<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;
use Carbon\Carbon;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'operator_id' => 1,
            'ultrasonic_id' => 1,
            'conveyor_id' => 1,
            'nama' => 'Dept Ingot',
            'lokasi' => 'Ingot Production Area',
            'status' => 'Active',
            'activity_date' => Carbon::now(),
            'duration' => 482,
            'batch' => 6,
        ]);
        Activity::create([
            'operator_id' => 2,
            'ultrasonic_id' => 2,
            'conveyor_id' => 3,
            'nama' => 'Dept Alloy',
            'lokasi' => 'Alloy Production Area',
            'status' => 'Active',
            'activity_date' => Carbon::now(),
            'duration' => 486,
            'batch' => 6,
        ]);
        Activity::create([
            'operator_id' => 1,
            'ultrasonic_id' => 3,
            'conveyor_id' => 5,
            'nama' => 'Dept Billet',
            'lokasi' => 'Billet Production Area',
            'status' => 'Active',
            'activity_date' => Carbon::now(),
            'duration' => 478,
            'batch' => 6,
        ]);
        Activity::create([
            'operator_id' => 1,
            'ultrasonic_id' => 4,
            'conveyor_id' => 2,
            'nama' => 'Stainless Furniture Production',
            'lokasi' => 'Stainless Furniture Production Area',
            'status' => 'Off',
            'activity_date' => Carbon::now()->addDays(7),
            'duration' => 0,
            'batch' => 0,
        ]);
        Activity::create([
            'operator_id' => 2,
            'ultrasonic_id' => 5,
            'conveyor_id' => 4,
            'nama' => 'Dept Automotive',
            'lokasi' => 'automotive Production Area',
            'status' => 'Off',
            'activity_date' => '2025-01-01',
            'duration' => 0,
            'batch' => 0,
        ]);
    }
}
