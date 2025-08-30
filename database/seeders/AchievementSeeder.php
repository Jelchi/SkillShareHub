<?php


namespace Database\Seeders;


use App\Models\Achievement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = [
            ['id' => 1, 'nama' => 'Penjual Super Andal', 'deskripsi' => 'Menyelesaikan 10 pesanan.', 'ikon' => 'fas fa-user-check'],
            ['id' => 2, 'nama' => 'Penjual Andal', 'deskripsi' => 'Menyelesaikan 5 pesanan.', 'ikon' => 'fas fa-handshake'],
            ['id' => 3, 'nama' => 'Top Rated', 'deskripsi' => 'Mendapatkan ulasan bintang lima pertama.', 'ikon' => 'fas fa-star'],
        ];
        Achievement::insert($achievements);
    }
}
