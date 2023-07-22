<?php

namespace App\Http\Controllers;

use App\Models\Suit;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller {
        // live search home dan lainnya
        public function search($searchText) {
            $suits = Suit::where('name', 'like', '%'.$searchText.'%')->orWhere('description', 'like', '%'.$searchText.'%')->orWhere('code', 'like', '%'.$searchText.'%')->get();
    
            return response()->json($suits);
        }

        // live search ketersedian jas
        public function searchKetersedianJas($searchTextKetersedianJas) {
            $suits = Suit::where('name', 'like', '%'.$searchTextKetersedianJas.'%')->where('availability', 'like', true)->get();
    
            return response()->json($suits);
        }

        // live search get email user
        public function searchGetEmails($getEmail) {
            $emailsUser = User::where('email', 'like', '%'.$getEmail.'%')->get();
    
            return response()->json($emailsUser);
        }
}
