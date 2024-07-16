<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function view()
    {
        $dataku = [
            'siswa' => Siswa::all()
        ];
        return view('data', $dataku);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Request $r)
    {
        $data = [
            'nis' => $r->nis,
            'nama' => $r->nama,
            'jurusan' => $r->jurusan
        ];

        Siswa::create($data);
        return redirect()->to('/data');
    }

    public function update($id)
    {
        $data = [
            'siswa' => Siswa::where('id_siswa', $id)->first()
        ];
        return view('edit', $data);
    }

    public function edit(Request $r, $id)
    {
        $data = [
            'nis' => $r->nis,
            'nama' => $r->nama,
            'jurusan' => $r->jurusan
        ];

        Siswa::where('id_siswa', $id)->update($data);
        return redirect()->to('/data');
    }

    public function delete($id)
    {

        Siswa::where('id_siswa', $id)->delete();
        return redirect()->to('/data');
    }
}
