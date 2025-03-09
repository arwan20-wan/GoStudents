<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       // $data = [
       //     'nama' => 'zidan',
       //     'pekerjaan' => 'Developer',
       // ];

        // return view('Home')->with($data); 

        $nama = "agus";
        $pekerjaan = "Student";
        return view('Home', compact('nama','pekerjaan'));
    }

    public function contact()
    {
        return view('contact'); 
    }
}
