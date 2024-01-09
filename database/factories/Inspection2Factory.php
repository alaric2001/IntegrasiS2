<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inspection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Inspection2Factory extends Factory
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
            'lebar' => $this->faker->numberBetween(106, 108),
            'panjang' => $this->faker->numberBetween(729, 731),
            'tinggi' => $this->faker->numberBetween(60, 62),
            'quality' => $quality,
            'action' => $quality == 'Good' ? 'Accepted' : 'Reject',
            'keterangan' => $quality == 'Good' ? '-' : $ket,
            'activity_id' => 2,
            'aluminium_id' => 2,
            'batch_id' => 3
        ];
    }
}
