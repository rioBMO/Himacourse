<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function indexMhs()
    {
        $mahasiswa = Mahasiswa::all();
        return view('indexMhs', compact('mahasiswa'));
    }
}
