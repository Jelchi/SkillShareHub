<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Order;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $skillsSold = 0;


        // Ambil data hanya jika user sudah login
        if ($user) {
            // Hitung order dimana user adalah penjual dan statusnya 'selesai'
            $skillsSold = Order::where('penjual_id', $user->id)
                ->where('status', 'selesai')
                ->count();
        }

        // Kirim data user dan skill terjual ke view
        return view('welcome', [
            'user' => $user,
            'skillsSold' => $skillsSold,
        ]);
    }
}
