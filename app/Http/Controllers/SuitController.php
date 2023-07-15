<?php

namespace App\Http\Controllers;

use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Http\Request;
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
        
        return view('suit.index', [
            'title' => 'Ky-Jas | Jas Dewasa',
            'profil' => $profilePhotoUrl
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

        return view('suit.index', [
            'title' => 'Ky-Jas | Jas Anak',
            'profil' => $profilePhotoUrl
        ]);
    }

    // detail suit
    public function detailSuit() {
        if (Auth::check()) {
            $email = Auth::user()->email;
            $profilePhotoUrl = Gravatar::get($email);
        } else {
            $profilePhotoUrl = null;
        }

        return view('suit.detail-suit', [
            'title' => 'Black - 12iju91',
            'profil' => $profilePhotoUrl
        ]);
    }
}
