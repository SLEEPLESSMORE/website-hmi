<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function sejarah(){
        return view('pages.sejarah');
    }
    public function about(){
        return view('pages.about');
    }
    public function kontak(){
        return view('pages.kontak');
    }
    public function pengurus(){
        return view('pages.pengurus');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function agenda(){
        return view('pages.agenda');
    }
    public function perpus(){
        return view('pages.perpus');
    }
    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }

}
