<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuitController extends Controller
{
    // adult suit
    public function index() {
        return view('suit.index', [
            'title' => 'Ky-Jas | Jas Dewasa'
        ]);
    }

    // kids suit
    public function kids() {
        return view('suit.index', [
            'title' => 'Ky-Jas | Jas Anak'
        ]);
    }
}