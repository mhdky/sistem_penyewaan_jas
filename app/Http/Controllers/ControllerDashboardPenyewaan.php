<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Suit;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class ControllerDashboardPenyewaan extends Controller
{
    // tampilkan jas yang disewa
    public function index() {
        $email = Auth::user()->email;
        $profilePhotoUrl = Gravatar::get($email);

        // $adults = Suit::where('category_id', 1)->latest()->get();
        
        return view('dashboard.penyewaan.index', [
            'title' => 'Ky-Jas | Dashboard Penyewaan',
            'profil' => $profilePhotoUrl,
            'suits' => Suit::latest()->get(),
            'rentals' => Rental::latest()->get(),
        ]);
    }

    public function formRental(Suit $suit) {
        $email = Auth::user()->email;
        $profilePhotoUrl = Gravatar::get($email);

        return view('dashboard.penyewaan.form-rental', [
            'title' => 'Sewa jas ' . $suit->name . ' | Ky Jas',
            'profil' => $profilePhotoUrl,
            'suit' => $suit
        ]);
    }

    // masukan data sewaan ke tabel rental
    public function rentalSuit(Request $request, Suit $suit) {
        $validateData = $request->validate([
            'name' => 'required|min:1|max:50',
            'email' => 'required|email|min:1|max:100',
            'rental_date' => 'required|date',
            'finish_rental_date' => 'required|date',
        ]);

        // cek jika penyewaan pada jas belum berakhir maka jas tidak dapat di sewa
        $suitRental = Rental::where('suit_id', $suit->id)->first();
        if($suitRental) {
            return back()->with('sewaBelumSelesai', 'Masa penyewaan belum berakhir');
        }

        // jika sewaan jas telah berakhir maka input data penyewaan ke database
        $rental = new Rental;
        $rental->suit_id = $suit->id;
        $rental->name = $validateData['name'];
        $rental->email = $validateData['email'];
        $rental->rental_date = $validateData['rental_date'];
        $rental->finish_rental_date = $validateData['finish_rental_date'];        
        $rental->save();

        return redirect('/dashboard/penyewaan');
    }
}
