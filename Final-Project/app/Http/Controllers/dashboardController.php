<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\pemasok;
use App\Models\Barang;
use Illuminate\Http\Request;

class dashboardController extends Controller
{   
    public function index()
    {
        $barangs = Barang::count();
        $pemasoks = pemasok::count();
        $profiles = Profile::count();
        return view('dashboard', [
            'pemasoks' => $pemasoks,
            'profiles' => $profiles,
            'barangs' => $barangs,
        ]);
    }
}
