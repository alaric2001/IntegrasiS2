<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Operator;

class OperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Operator::create([
            'nama' => 'John Doe',
            'password' => bcrypt('12345'),
            'email' => 'john@example.com',
            'role' => 'admin',
        ]);

        Operator::create([
            'nama' => 'Jane Doe',
            'password' => bcrypt('12345'),
            'email' => 'jane@example.com',
            'role' => 'user',
        ]);
    }
}
