<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'profil' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'jenis_kelamin' => ['required', 'in:pria,wanita'],
            'tanggal_lahir' => ['required', 'date', 'before:today'],
            'negara' => ['required', 'string', 'in:indonesia,singapore,malaysia,thailand'],
            'skills' => ['required', 'array', 'min:1'],
            'skills.*' => ['in:design,copywriting,web'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $profileImagePath = 'images/default.png';


        // Proses upload gambar profil jika ada
        if (isset($data['profil'])) {
            $profileImagePath = $data['profil']->store('profiles', 'public');
        }


        // Membuat user baru
        $user = User::create([
            'profil' => $profileImagePath,
            'nama' => $data['nama'],
            'email' => $data['email'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'negara' => $data['negara'],
            'password' => Hash::make($data['password']),
        ]);


        // Membuat skill untuk setiap kategori yang dipilih oleh user
        foreach ($data['skills'] as $kategori) {
            Skill::create([
                'user_id' => $user->id,
                'kategori' => $kategori,
                'judul' => null,
                'deskripsi' => null,
                'harga' => null, // Harga acak kelipatan 10rb
            ]);
        }


        return $user;
    }
}
