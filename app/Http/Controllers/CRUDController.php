<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function form_dosen()
    {
        return view('add_dosen');
    }

    public function add_dosen(Request $request)
    {
        $validateData = $request->validate([
            'nidn' => 'required|string|max:20|unique:dosens,nidn',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email',
            'prodi' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            
        ]);

        $dosen = new Dosen;
        $dosen->nidn = $validateData['nidn'];
        $dosen->nama = $validateData['nama'];
        $dosen->email = $validateData['email'];
        $dosen->prodi = $validateData['prodi'];
        $dosen->jurusan = $validateData['jurusan'];
        $dosen->save();

        return redirect('/dosen')->with('success', 'Data Dosen Berhasil Ditambahkan');
    }

    public function edit_dosen($id)
    {
        $dosen = Dosen::find($id);
        return view('edit_dosen', compact('dosen'));
    }

    public function update_dosen(Request $request, $id)
    {
        $validateData = $request->validate([
            'nidn' => 'required|string|max:20|unique:dosens,nidn,' . $id,
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email,' . $id,
            'prodi' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
        ]);

        $dosen = Dosen::find($id);
        $dosen->nidn = $validateData['nidn'];
        $dosen->nama = $validateData['nama'];
        $dosen->email = $validateData['email'];
        $dosen->prodi = $validateData['prodi'];
        $dosen->jurusan = $validateData['jurusan'];
        $dosen->save();

        return redirect('/dosen')->with('success', 'Data Dosen Berhasil Diubah');
    }

    public function delete_dosen($id)
    {
        $dosen = Dosen::find($id);
        if ($dosen) {
            $dosen->delete();
            return redirect('/dosen')->with('success', 'Data Dosen Berhasil Dihapus');
        } else {
            return redirect('/dosen')->with('error', 'Data Dosen Tidak Ditemukan');
        }
    }
}
