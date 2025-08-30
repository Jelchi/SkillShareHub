<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Achievement;


class AchievementUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil 10 user pertama dan semua achievement
        $users = User::take(10)->get();
        $achievements = Achievement::all();
        // Loop melalui setiap user
        foreach ($users as $user) {
            // Tentukan berapa banyak achievement yang akan diberikan (antara 1 sampai 3)
            $numberOfAchievements = rand(1, 3);


            // Ambil achievement secara acak sejumlah yang ditentukan di atas
            $randomAchievements = $achievements->random($numberOfAchievements);


            // Loop untuk memberikan setiap achievement yang terpilih kepada user
            foreach ($randomAchievements as $achievement) {
                $user->achievements()->attach(
                    $achievement->id,
                    ['earned_at' => now()->subDays(rand(0, 30))]
                );
            }
        }
    }
}
