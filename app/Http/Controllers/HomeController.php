<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        return view('home');
    }

    public function biodata () {
        return view('halaman.biodata');
    }

    public function send(Request $request){
       $nama = $request->input('fullname');
       $alamat = $request->input('address');

       return view ('halaman.welcome',['nama'=>$nama, 'alamat'=>$alamat]);
        
    }
}
