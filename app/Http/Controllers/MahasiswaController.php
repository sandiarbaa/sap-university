<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {

        // $mhs = Mahasiswa::latest();
        
        // if(request('cari')) {
        //     $mhs->where('nama', 'like', '%' . request('cari') . '%')->orWhere('nim', 'like', '%' . request('cari') . '%');
        // }
        
        return view('dashboard', [
            "title" => "Dashboard Page",
            "mahasiswa" => Mahasiswa::latest()->Mahasiswa(request(['cari']))->get()
        ]);
    }

    public function detail(Mahasiswa $mahasiswa) {
        return view('detail', [
            "title" => "Detail Page",
            "mahasiswa" => $mahasiswa
        ]);
    }
}
