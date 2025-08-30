<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Order;


class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $orders = [
            ['id' => 1, 'penjual_id' => 1, 'pembeli_id' => 2, 'skill_id' => 1, 'status' => 'selesai'],
            ['id' => 2, 'penjual_id' => 2, 'pembeli_id' => 3, 'skill_id' => 2, 'status' => 'selesai'],
            ['id' => 3, 'penjual_id' => 3, 'pembeli_id' => 1, 'skill_id' => 3, 'status' => 'belum selesai'],
            ['id' => 4, 'penjual_id' => 4, 'pembeli_id' => 5, 'skill_id' => 4, 'status' => 'selesai'],
            ['id' => 5, 'penjual_id' => 5, 'pembeli_id' => 6, 'skill_id' => 5, 'status' => 'batal'],
            ['id' => 6, 'penjual_id' => 6, 'pembeli_id' => 7, 'skill_id' => 6, 'status' => 'selesai'],
            ['id' => 7, 'penjual_id' => 7, 'pembeli_id' => 8, 'skill_id' => 7, 'status' => 'belum selesai'],
            ['id' => 8, 'penjual_id' => 8, 'pembeli_id' => 9, 'skill_id' => 8, 'status' => 'selesai'],
            ['id' => 9, 'penjual_id' => 9, 'pembeli_id' => 10, 'skill_id' => 9, 'status' => 'batal'],
            ['id' => 10, 'penjual_id' => 10, 'pembeli_id' => 4, 'skill_id' => 10, 'status' => 'selesai'],
        ];


        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
