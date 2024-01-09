<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inspection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Inspection1Factory extends Factory
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
        $ket = $this->faker->randomElement(['Pecah','Cacat', 'Penyok', 'Bengkok', 'Penyok, Bengkok, & Retak', 'Cacat & Lecet', 'Retak & Bengkok', 'Retak', 'Pecah & Retak']);

        return [
            'lebar' => $this->faker->numberBetween(198, 202),
            'panjang' => $this->faker->numberBetween(798, 802),
            'tinggi' => $this->faker->numberBetween(84, 86),
            'quality' => $quality,
            'action' => $quality == 'Good' ? 'Accepted' : 'Reject',
            // 'keterangan' => $this->faker->sentence($nbWords = $this->faker->numberBetween(1, 7)),
            'keterangan' => $quality == 'Good' ? '-' : $ket,
            'activity_id' => 1,
            'aluminium_id' => 1,
            'batch_id' => 1
        ];
    }
}
