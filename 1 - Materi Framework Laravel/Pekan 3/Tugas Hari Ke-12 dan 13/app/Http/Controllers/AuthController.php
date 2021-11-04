<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar(){
        return view('register');
    }

    public function datang(Request $request){
        $namadepan = $request->firstname;
        $namabelakang = $request->lastname;
        $namalengkap = $namadepan . " " . $namabelakang;
        return view("welcome", ['namalengkap' => $namalengkap]);
    }
}
