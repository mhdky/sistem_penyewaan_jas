<?php

namespace App\Http\Controllers;

use App\Models\Suit;
use Illuminate\Http\Request;

class SearchController extends Controller
{
        // live search home dan lainnya
        public function search($searchText) {
            $suits = Suit::where('name', 'like', '%'.$searchText.'%')->orWhere('description', 'like', '%'.$searchText.'%')->orWhere('code', 'like', '%'.$searchText.'%')->get();
    
            return response()->json($suits);
        }
}
