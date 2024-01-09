<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inspection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Inspection32Factory extends Factory
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
            'diameter' => $this->faker->numberBetween(203.2, 203.4),
            'berat' => $this->faker->numberBetween(506.5, 507),
            'quality' => $quality,
            'action' => $quality == 'Good' ? 'Accepted' : 'Reject',
            'keterangan' => $quality == 'Good' ? '-' : $ket,
            'activity_id' => 3,
            'aluminium_id' => 3,
            'batch_id' => 4
        ];  
    }
}
