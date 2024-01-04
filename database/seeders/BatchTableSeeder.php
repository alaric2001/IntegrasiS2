<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Batch;

class BatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batch::create([
            'deskripsi' => 'Produk Aluminium Inalum melambangkan keunggulan, inovasi, dan keandalan, yang membuka jalan bagi masa depan yang cemerlang.',
        ]);
        Batch::create([
            'deskripsi' => 'Produk aluminium yang dibuat dengan cermat dirancang untuk memberdayakan industri dengan presisi dan kekuatan yang tak tertanding',
        ]);
        Batch::create([
            'deskripsi' => 'Fasilitas dan pabrik kami merupakan pusat inovasi dan keunggulan dalam produksi logam berkualitas tinggi',
        ]);
        Batch::create([
            'deskripsi' => 'Dengan pengalaman yang luas dan keunggulan dalam teknologi, kami menghasilkan logam berkualitas tinggi dan berstandart internasional untuk memenuhi pasar domestik dan global.',
        ]);
        Batch::create([
            'deskripsi' => 'Komitmen kami terhadap inovasi, keberlanjutan, dan tanggung jawab sosial menjadikan kami wajah industri aluminium nasional, bersama seluruh pemangku kepentingan kami membangun indonesia yang maju sejahtera di masa depan',
        ]);
        Batch::create([
            'deskripsi' => 'komitmen pada tanggung jawab sosial dan lingkungan, membangun masa depan industri logam yang berkelanjutan dan memberikan nilai tambah bagi masyarakat global.',
        ]);
        Batch::create([
            'deskripsi' => 'Inalum dipandu oleh keunggulan, keberlanjutan, dan kolaborasi',
        ]);
        Batch::create([
            'deskripsi' => 'berkomitmen pada tata kelola yang baik, tanggung jawab sosial, dan pertumbuhan berkelanjutan dalam industri logam.',
        ]);
    }
}
