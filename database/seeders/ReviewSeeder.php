<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Review;


class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            ['order_id' => 1, 'komen' => 'Pengerjaan cepat dan hasilnya memuaskan!', 'rating' => 5],
            ['order_id' => 2, 'komen' => 'Artikelnya bagus dan sesuai kaidah SEO.', 'rating' => 3],
            ['order_id' => 4, 'komen' => 'Ilustrasinya keren, sangat di luar ekspektasi.', 'rating' => 5],
            ['order_id' => 6, 'komen' => 'Copywritingnya berhasil meningkatkan penjualan. Terima kasih!', 'rating' => 3],
            ['order_id' => 8, 'komen' => 'Website toko online saya jadi cepat dan mudah diakses.', 'rating' => 4],
            ['order_id' => 10, 'komen' => 'Desain UI-nya sangat user-friendly. Recommended seller!', 'rating' => 5],
        ];


        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
