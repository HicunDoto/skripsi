<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function login (Request $request){
        $validasi = $request->all();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);
        if(auth()->attempt(array('email' => $validasi['email'], 'password' => $validasi['password']))){
            if (auth()->user()->level == "admin") {
                return redirect()->route('get.soal')->with('admin', 'Selamat Datang Admin');
            }else{
                return redirect()->route('get.dashboard')->with('status', 'Berhasil Login, Selamat Datang');
            }
        }else{
        return redirect('/login')->with('status', 'Email & Password Salah!!');
        }
    }
    
    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }
    public function homes()
    {
        return view('index');
    }
    public function home()
    {
        return view('login');
    }
    public function registrasi()
    {
        return view('registrasi');
    }
    public function store (Request $request){
      
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'confirm-password' => 'required|same:password',
            ]);
            $user = \App\Models\User::create([
                'name' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 'user',
                'remember_token' => Str::random(60),
            ]);
            return redirect('/registrasi')->with('status', 'Berhasil membuat akun');
    }

}
