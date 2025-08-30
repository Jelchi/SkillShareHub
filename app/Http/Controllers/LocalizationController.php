<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function switchLang(Request $request, $locale)
    {
        if (in_array($locale, ['en', 'id'])) {
            $request->session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
