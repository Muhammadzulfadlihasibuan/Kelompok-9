<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'umur' => 'required|integer',
            'bio' => 'required|string',
            'alamat' => 'required|string',
        ]);

        Profile::create($request->all());

        return redirect()->route('profiles.index')->with('success', 'Profile created successfully.');
    }
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'umur' => 'required|integer',
            'bio' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $profile->update($request->all());

        return redirect()->route('profiles.index')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('profiles.index')->with('success', 'Profile deleted successfully.');
    }
}

