<?php


namespace Database\Seeders;


use App\Models\User;
use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $categories = ['design', 'copywriting', 'web'];


        foreach ($users as $user) {
            // Pilih satu kategori secara acak dari daftar
            $randomCategory = $categories[array_rand($categories)];
           
            // Buat judul dinamis dari Kategori + Nama User
            // Contoh: "Design dari Andi Budiman"
            $skillTitle = ucfirst($randomCategory) . ' dari ' . $user->nama;


            Skill::create([
                'user_id' => $user->id,
                'kategori' => $randomCategory,
                'judul' => $skillTitle,
                'deskripsi' => "Menawarkan jasa profesional dalam kategori " . strtolower($randomCategory) . ".",
                'harga' => rand(5, 30),
                'rating' => rand(1, 5),
            ]);
        }
    }
}
