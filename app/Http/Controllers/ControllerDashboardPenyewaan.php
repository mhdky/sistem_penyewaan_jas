<?php

namespace App\Http\Controllers;

use App\Models\Suit;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerDashboardPenyewaan extends Controller
{
    public function index() {
        $email = Auth::user()->email;
        $profilePhotoUrl = Gravatar::get($email);

        $adults = Suit::where('category_id', 1)->latest()->get();
        
        return view('dashboard.penyewaan.index', [
            'title' => 'Ky-Jas | Dashboard Penyewaan',
            'profil' => $profilePhotoUrl,
            'adults' => $adults,
        ]);
    }
}
