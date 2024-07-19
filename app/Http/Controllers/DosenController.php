<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function indexDosen()
    {
        $dosen = Dosen::all();
        return view('indexDosen', compact('dosen'));
    }
}
