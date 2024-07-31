<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Show the form for editing the user's profile.
     */
    public function edit()
    {
        return view('user.edit');
    }

    /**
     * Update the user's name.
     */
    public function updateName(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Nama harus diisi',
            'name.max' => 'Nama maksimal 255 karakter',
        ]);

        $user = Auth::user();

        if (!$user instanceof \App\Models\User) {
            return redirect()->back()->withErrors(['user' => 'Pengguna tidak valid']);
        }

        $user = User::find($user->id);
        $user->name = $request->input('name');
        $user->save();

        return redirect()->back()->with('success', 'Nama berhasil diperbarui');
    }

    /**
     * Update the user's password.
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ], [
            'current_password.required' => 'Password saat ini harus diisi',
            'new_password.required' => 'Password baru harus diisi',
            'new_password.min' => 'Password baru minimal 8 karakter',
            'new_password.confirmed' => 'Password baru tidak cocok dengan konfirmasi',
        ]);

        $user = Auth::user();

        if (!$user instanceof \App\Models\User) {
            return redirect()->back()->withErrors(['user' => 'Pengguna tidak valid']);
        }

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Password saat ini salah']);
        }

        $user = User::find($user->id);
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil diperbarui');
    }
}
