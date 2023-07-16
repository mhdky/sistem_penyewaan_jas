<?php

namespace App\Http\Controllers;

use App\Models\Suit;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        if (Auth::check()) {
            $email = Auth::user()->email;
            $profilePhotoUrl = Gravatar::get($email);
        } else {
            $profilePhotoUrl = null;
        }

        $adults = Suit::where('category_id', 1)->take(6)->get();
        $kids = Suit::where('category_id', 2)->take(6)->get();
    
        return view('home', [
            'title' => 'Ky-Jas | Jual & Sewa Jas Keren, Lengkap, Harga Bersahabat',
            'profil' => $profilePhotoUrl,
            'adults' => $adults,
            'kids' => $kids,
        ]);
    }
}
