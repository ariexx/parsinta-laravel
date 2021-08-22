<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Flasher\Prime\FlasherInterface;

class RegistrationController extends Controller
{
    public function create()
    {
      return view('auth.register');
    }

    public function store(Request $request, FlasherInterface $flasher)
    {
        $request->validate([
            'name'  => ['required', 'min:3', 'string'],
            'username' => ['required', 'min:3', 'max:25', 'alpha_num', 'unique:users'],
            'email' => ['required', 'unique:users', 'email'],
            'password'  => ['required', 'min:8'],
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $flasher->addSuccess('Sukses! kamu berhasil mendaftar');
        return redirect('/');
    }
}
