<?php


namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,          // 1. Buat Users
            AchievementSeeder::class,   // 2. Buat Achievements
            SkillSeeder::class,         // 3. Buat Skills (butuh User)
            OrderSeeder::class,      // 4. Buat Orders (butuh User & Skill)
            ReviewSeeder::class,        // 5. Buat Reviews (butuh Order)
            AchievementUserSeeder::class, // 6. Buat Hubungan User-Achievement (butuh User & Achievement)
            NotificationSeeder::class,  // 7. Buat Notifikasi (butuh User)
        ]);
    }
}
