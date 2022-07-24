<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\member;
use App\Book;
use App\Training;
use App\Berita;
use App\User;
use App\Agenda;

class HomeController extends Controller
{
    public function index(){

        $member = member::count();


        return view('pages.home',[
            'member' => $member,

        ]);
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
        $agendas = Agenda::take(8)->get();
        return view('pages.agenda.agenda',[
            'agendas' => $agendas,
        ]);
    }
    public function perpus(){

        $books = Book::take(8)->get();
        return view('pages.perpustakaan.perpus',[
            'books' => $books,
        ]);
    }
    public function detailbook(Request $request, $id){
        $book = Book::where('judul',$id)->firstOrFail();
        return view('pages.perpustakaan.detail-book',[
            'book' => $book,
        ]);
    }
    
    public function training(){
        $trainings = Training::take(8)->get();
        return view('pages.training.training',[
            'trainings' => $trainings,
        ]);
    }
    
    public function detailtraining(Request $request, $id){
        $tgl = Carbon::now();
        $training = Training::where('judul',$id)->firstOrFail();
        return view('pages.training.training-detail',[
            'training' => $training,
        ]);
    }

    public function berita(){
        $beritas = Berita::take(8)->get();
        $user = User::all();
        return view('pages.berita.index',[
            'beritas' => $beritas,
            'user' => $user,
        ]);
    }
    public function detailberita(Request $request, $id){
        $tgl = Carbon::now();
        $berita = Berita::where('judul',$id)->firstOrFail();
        return view('pages.berita.detail-berita',[
            'berita' => $berita,
        ]);
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
