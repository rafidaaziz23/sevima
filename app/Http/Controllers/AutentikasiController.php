<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function actLogin(Request $request)
    {
        $cekUser = User::where('email', $request['email'])->first();

        /* Cek Password */
        if (!$cekUser || !Hash::check($request['password'], $cekUser->password)) {
           return back()->with('error', 'Email / Password Salah');
        }

        Auth::login($cekUser);
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function actRegister(Request $request)
    {
        $cekIfExist = User::where('email', $request['email'])->first();

        if (!is_null($cekIfExist)) {
            return back()->with('error', 'Email sudah ada');
        }

        User::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'role' => 'user',
            'password' => bcrypt($request['password'])
        ]);

        return back()->with('success', 'Success');
    }

    public function actLogout(Request $request)
    {
        Auth::logout();
        return response([
            "status" => "ok"
        ]);
    }
}
