<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\pemasok;
use Illuminate\Http\Request;

class dashboardController extends Controller
{   
    public function index()
    {
        $pemasoks = pemasok::count();
        $profiles = Profile::count();
        return view('dashboard', [
            'pemasoks' => $pemasoks,
            'profiles' => $profiles,
        ]);
    }
}
