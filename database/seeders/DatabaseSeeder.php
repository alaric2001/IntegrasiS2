<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\Inspection1Factory;
use Database\Factories\Inspection2Factory;
use Database\Factories\Inspection3Factory;
use Database\Factories\Inspection31Factory;
use Database\Factories\Inspection32Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(OperatorsTableSeeder::class);
        $this->call(AluminiumsTableSeeder::class);
        $this->call(ConveyorsTableSeeder::class);
        $this->call(UltrasonicsTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(BatchTableSeeder::class);

        // Inspection1Factory::factory(5)->create();
        Inspection1Factory::new()->count(15)->create();
        Inspection2Factory::new()->count(15)->create();
        Inspection3Factory::new()->count(5)->create();
        Inspection31Factory::new()->count(5)->create();
        Inspection32Factory::new()->count(5)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
