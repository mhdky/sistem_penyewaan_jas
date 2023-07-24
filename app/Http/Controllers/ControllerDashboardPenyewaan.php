<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Suit;
use App\Models\User;
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

        $rentals = Rental::where('finish_rental', false)->latest()->get();
        
        return view('dashboard.penyewaan.index', [
            'title' => 'Ky-Jas | Dashboard Penyewaan',
            'profil' => $profilePhotoUrl,
            'suits' => Suit::latest()->get(),
            'rentals' => $rentals,
        ]);
    }

    // view form rental
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
            'rental_fee' => 'required|numeric|min:1|max:99999999',
            'warranty_fee' => 'required|numeric|min:1|max:99999999',
            'rental_date' => 'required|date',
            'finish_rental_date' => 'required|date',
        ]);

        // cek jika penyewaan pada jas belum berakhir maka jas tidak dapat di sewa
        $suitRental = Rental::where('suit_id', $suit->id)->where('finish_rental', false)->first();
        if($suitRental) {
            return back()->with('sewaBelumSelesai', 'Masa penyewaan belum berakhir');
        }

        // Lakukan pengecekan apakah email yang dimasukkan sudah ada di tabel users
        $email = $validateData['email'];
        
        if(User::where('email', $email)->exists()) {
            // Email ditemukan maka input data penyewaan ke database
            $suitAvailability = Suit::where('id', $suit->id)->first();
            $suitAvailability->availability = false;
            $suitAvailability->update();

            $rental = new Rental;
            $rental->suit_id = $suit->id;
            $rental->name = $validateData['name'];
            $rental->email = $email;
            $rental->rental_fee = $validateData['rental_fee'];
            $rental->warranty_fee = $validateData['warranty_fee'];
            $rental->rental_date = $validateData['rental_date'];
            $rental->finish_rental_date = $validateData['finish_rental_date'];        
            $rental->save();

            return redirect('/dashboard/penyewaan');
        }else {
            // Email tidak ditemukan, kembali ke halaman sebelumnya
            return back()->with('errorEmail', 'Email tidak terdaftar');
        }
    }

    // sewaan selesai 
    public function finishRentalSuit(Rental $rental) {
        $finishRental = Rental::where('id', $rental->id)->first();

        // cek jika jas dikembalikan lewat dari tanggal akhir sewaan
        if (now() < $finishRental->finish_rental_date) {
            $finishRental->warranty_fee = 0;
        }
        $finishRental->finish_rental = true;
        $finishRental->total_cost = $finishRental->rental_fee + $finishRental->warranty_fee;
        $finishRental->update();

        $suitAvailability = Suit::where('id', $rental->suit_id)->first();
        $suitAvailability->availability = true;
        $suitAvailability->update();

        return back();
    }

    // tampilan edit data rental berdasarkan id 
    public function editRental(Rental $rental) {
        // cek jika penyewaan telah selesai maka tidak dapat mengakses halaman edit rental
        if ($rental->finish_rental == true) {
            abort('404');
        }

        $email = Auth::user()->email;
        $profilePhotoUrl = Gravatar::get($email);

        $suit = Suit::where('id', $rental->suit_id)->first();

        return view('dashboard.penyewaan.form-rental', [
            'title' => $rental->id,
            'profil' => $profilePhotoUrl,
            'rental' => $rental,
            'suit' => $suit,
        ]);
    }

    // update rental ke database rental berdasarkan id
    public function updateRental(Request $request, Rental $rental) {
        $validateData = $request->validate([
            'name' => 'required|min:1|max:50',
            'email' => 'required|email|min:1|max:100',
            'rental_fee' => 'required|numeric|min:1|max:99999999',
            'warranty_fee' => 'required|numeric|min:1|max:99999999',
            'rental_date' => 'required|date',
            'finish_rental_date' => 'required|date',
        ]);

        if ($rental->finish_rental == true) {
            return back()->with('gagal', 'Gagal mengedit data');
        }

        // Lakukan pengecekan apakah email yang dimasukkan sudah ada di tabel users
        $email = $validateData['email'];
        
        if(User::where('email', $email)->exists()) {
            $rental->name = $validateData['name'];
            $rental->email = $email;
            $rental->rental_fee = $validateData['rental_fee'];
            $rental->warranty_fee = $validateData['warranty_fee'];
            $rental->rental_date = $validateData['rental_date'];
            $rental->finish_rental_date = $validateData['finish_rental_date'];        
            $rental->update();

            return redirect('/dashboard/penyewaan');
        }else {
            // Email tidak ditemukan, kembali ke halaman sebelumnya
            return back()->with('errorEmail', 'Email tidak terdaftar');
        }
    }
}
