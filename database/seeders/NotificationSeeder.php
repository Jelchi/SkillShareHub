<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Notification;


class NotificationSeeder extends Seeder
{
    public function run(): void
    {
        $notifications = [
            // Notifikasi pesanan baru
            ['user_id' => 1, 'pesan' => 'Citra Lestari memesan Desain Logo Profesional', 'is_read' => false],
            ['user_id' => 4, 'pesan' => 'Eko Sanjaya memesan Ilustrasi Karakter Custom', 'is_read' => false],


            // Notifikasi pembatalan pesanan
            ['user_id' => 5, 'pesan' => 'Fara Quinn membatalkan pesanan Fix Bug Website PHP', 'is_read' => true],
            ['user_id' => 9, 'pesan' => 'Indra Perkasa membatalkan pesanan Proofreading Dokumen Bahasa Inggris', 'is_read' => true],


            // Notifikasi achievement: 5 pesanan
            ['user_id' => 1, 'pesan' => 'Selamat atas 5 pesanan pertama anda!', 'is_read' => false],
            ['user_id' => 2, 'pesan' => 'Selamat atas 5 pesanan pertama anda!', 'is_read' => false],


            // Notifikasi achievement: 10 pesanan
            ['user_id' => 6, 'pesan' => 'Selamat atas 10 pesanan pertama anda!', 'is_read' => false],
            ['user_id' => 9, 'pesan' => 'Selamat atas 10 pesanan pertama anda!', 'is_read' => false],


            // Notifikasi achievement: rating 5
            ['user_id' => 3, 'pesan' => 'Selamat atas rating 5 pertama anda!', 'is_read' => false],
            ['user_id' => 5, 'pesan' => 'Selamat atas rating 5 pertama anda!', 'is_read' => false],
        ];


        foreach ($notifications as $notification) {
            Notification::create($notification);
        }
    }
}
