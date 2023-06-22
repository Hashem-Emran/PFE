<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add any other fields you want to validate or update
        ]);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Add any other fields you want to update
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
