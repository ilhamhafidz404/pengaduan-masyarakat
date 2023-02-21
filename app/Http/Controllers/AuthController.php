<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function view_login()
    {
        return view('auth.login-masyarakat');
    }

    public function do_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $result = Masyarakat::whereUsername($request->username)->first();
        if ($result) {
            if ($result->password == $request->password) {
                return 'login berhasil';
            }
        }

        return redirect()->back()->withErrors(['loginError' => 'Incorrect email or password']);
    }

    public function view_register()
    {
        return view('auth.register-masyarakat');
    }

    public function do_register(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:masyarakat',
            'telp' => 'required',
            'nama' => 'required',
            'username' => 'required|unique:masyarakat',
            'password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        Masyarakat::create([
            'nik' => $request->nik,
            'telp' => $request->telp,
            'nama' => $request->nama,
            'username' => $request->nama,
            'password' => $request->password
        ]);
    }
}
