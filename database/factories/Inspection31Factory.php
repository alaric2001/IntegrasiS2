<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inspection;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Inspection31Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Inspection::class;

    public function definition(): array
    {
        $quality = $this->faker->randomElement(['Good', 'Bad']);

        return [
            'diameter' => $this->faker->numberBetween(177.8, 178),
            'berat' => $this->faker->numberBetween(386.5, 387),
            'quality' => $quality,
            'action' => $quality == 'Good' ? 'Accepted' : 'Reject',
            'keterangan' => $this->faker->sentence($nbWords = $this->faker->numberBetween(1, 7)),
            'activity_id' => 3,
            'aluminium_id' => 3,
        ];  
    }
}
