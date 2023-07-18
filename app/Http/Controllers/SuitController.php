<?php

namespace App\Http\Controllers;

use App\Models\Suit;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Support\Facades\Auth;

class SuitController extends Controller
{
    // adult suit
    public function index() {
        if (Auth::check()) {
            $email = Auth::user()->email;
            $profilePhotoUrl = Gravatar::get($email);
        } else {
            $profilePhotoUrl = null;
        }

        $adults = Suit::where('category_id', 1)->latest()->get();
        
        return view('suit.index', [
            'title' => 'Ky-Jas | Jas Dewasa',
            'profil' => $profilePhotoUrl,
            'adults' => $adults,
        ]);
    }

    // kids suit
    public function kids() {
        if (Auth::check()) {
            $email = Auth::user()->email;
            $profilePhotoUrl = Gravatar::get($email);
        } else {
            $profilePhotoUrl = null;
        }

        $kids = Suit::where('category_id', 2)->latest()->get();

        return view('suit.index', [
            'title' => 'Ky-Jas | Jas Anak',
            'profil' => $profilePhotoUrl,
            'kids' => $kids,
        ]);
    }

    // detail suit
    public function detailSuit($name, $code) {
        $suit = Suit::where('name', $name)->where('code', $code)->first();

        if (Auth::check()) {
            $email = Auth::user()->email;
            $profilePhotoUrl = Gravatar::get($email);
        } else {
            $profilePhotoUrl = null;
        }

        return view('suit.detail-suit', [
            'title' => 'Black - 12iju91',
            'profil' => $profilePhotoUrl,
            'suit' => $suit,
        ]);
    }

}
