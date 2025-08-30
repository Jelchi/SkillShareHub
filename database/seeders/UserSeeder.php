<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['nama' => 'Andi Budiman', 'email' => 'andi@example.com', 'jenis_kelamin' => 'pria', 'tanggal_lahir' => '1995-05-10', 'negara' => 'indonesia', 'poin' => 150, 'password' => Hash::make('password')],
            ['nama' => 'Citra Lestari', 'email' => 'citra@example.com', 'jenis_kelamin' => 'wanita', 'tanggal_lahir' => '1998-02-20', 'negara' => 'indonesia', 'poin' => 75, 'password' => Hash::make('password')],
            ['nama' => 'Benny Tan', 'email' => 'benny@example.com', 'jenis_kelamin' => 'pria', 'tanggal_lahir' => '1992-11-30', 'negara' => 'singapore', 'poin' => 25, 'password' => Hash::make('password')],
            ['nama' => 'Dewi Sartika', 'email' => 'dewi@example.com', 'jenis_kelamin' => 'wanita', 'tanggal_lahir' => '2000-01-15', 'negara' => 'indonesia', 'poin' => 200, 'password' => Hash::make('password')],
            ['nama' => 'Eko Sanjaya', 'email' => 'eko@example.com', 'jenis_kelamin' => 'pria', 'tanggal_lahir' => '1997-07-07', 'negara' => 'malaysia', 'poin' => 50, 'password' => Hash::make('password')],
            ['nama' => 'Fara Quinn', 'email' => 'fara@example.com', 'jenis_kelamin' => 'wanita', 'tanggal_lahir' => '1993-03-12', 'negara' => 'indonesia', 'poin' => 90, 'password' => Hash::make('password')],
            ['nama' => 'Gerry Wijaya', 'email' => 'gerry@example.com', 'jenis_kelamin' => 'pria', 'tanggal_lahir' => '1999-09-09', 'negara' => 'thailand', 'poin' => 25, 'password' => Hash::make('password')],
            ['nama' => 'Hilda Sari', 'email' => 'hilda@example.com', 'jenis_kelamin' => 'wanita', 'tanggal_lahir' => '1996-06-25', 'negara' => 'singapore', 'poin' => 110, 'password' => Hash::make('password')],
            ['nama' => 'Indra Perkasa', 'email' => 'indra@example.com', 'jenis_kelamin' => 'pria', 'tanggal_lahir' => '1991-12-01', 'negara' => 'indonesia', 'poin' => 300, 'password' => Hash::make('password')],
            ['nama' => 'Jasmine Lee', 'email' => 'jasmine@example.com', 'jenis_kelamin' => 'wanita', 'tanggal_lahir' => '2001-08-18', 'negara' => 'malaysia', 'poin' => 45, 'password' => Hash::make('password')],
        ];


        foreach ($users as $user) {
            User::create($user);
        }
    }
}
