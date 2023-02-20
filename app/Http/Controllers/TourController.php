<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Destination;
use App\Accommodation;
use App\Transportation;
use App\Package;
use App\PackageFee;

class TourController extends Controller
{
    public function index()
    {
        // Menampilkan halaman utama
    }

    public function createUser(Request $request)
    {
        // Membuat akun user baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
    }

    public function login(Request $request)
    {
        // Login ke website
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }

    public function selectPackage(Request $request)
    {
        // Memilih paket tour
        $package = Package::find($request->package_id);
    }

    public function fillParticipantData(Request $request)
    {
        // Mengisi data peserta
        $package = Package::find($request->package_id);

        $package->participant_name = $request->participant_name;
        $package->participant_email = $request->participant_email;
        $package->participant_phone_number = $request->participant_phone_number;
        $package->save();
    }

    public function selectDestination(Request $request)
    {
        // Memilih tempat wisata
        $destination = Destination::find($request->destination_id);
    }

    public function selectAccommodation(Request $request)
    {
        // Memilih tempat penginapan
        $accommodation = Accommodation::find($request->accommodation_id);
    }

    public function selectTransportation(Request $request)
    {
        // Memilih transportasi
        $transportation = Transportation::find($request->transportation_id);
    }

    public function calculateFee()
    {
        // Menghitung total biaya dalam tour
        $package_fee = PackageFee::where('package_id', $request->package_id)->get();
    }

    public function showFee()
    {
        // Menampilkan total biaya dalam tour di halaman user
        $package_fee = PackageFee::where('package_id', $request->package_id)->get();

        return view('fee', compact('package_fee'));
    }

    public function trackPerformance()
    {
        // Melacak performa website
    }
}