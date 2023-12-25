<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluminium;

class AluminiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aluminium::create([
            'nama' => 'Ingot',
            'deskripsi' => 'Aluminium ingot adalah bentuk awal dari aluminium yang diperoleh melalui proses peleburan bijih aluminium. Ingot adalah blok logam yang dibentuk ulang setelah proses peleburan dan pendinginan.',
        ]);

        Aluminium::create([
            'nama' => 'Alloy',
            'deskripsi' => 'Alloy aluminium adalah campuran dari aluminium dengan satu atau lebih unsur logam lainnya. Proses alloying meningkatkan sifat-sifat mekanis dan termal aluminium, seperti kekuatan, ketahanan korosi, dan kemampuan pengerjaan.',
        ]);

        Aluminium::create([
            'nama' => 'Billet',
            'deskripsi' => 'Billet aluminium adalah bentuk intermediate atau semi-finished dari aluminium yang biasanya berupa batang atau balok. Billet dibuat melalui proses peleburan dan pengecoran aluminium cair ke dalam cetakan yang sesuai. ',
        ]);
    }
}
