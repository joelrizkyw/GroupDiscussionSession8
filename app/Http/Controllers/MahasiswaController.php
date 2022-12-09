<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // Function untuk buka halaman utama (index.blade.php)
    public function index()
    {

        $dataMahasiswa = Mahasiswa::all();

        return view("index")
            ->with("dataMahasiswa", $dataMahasiswa);
    }

    // Function untuk buka halaman detail mahasiswa (detail_mahasiswa.blade.php)
    public function detailMahasiswa($mahasiswaId)
    {

        $dataDetail = Mahasiswa::find($mahasiswaId);

        return view("detail_mahasiswa")
            ->with("dataDetail", $dataDetail);
    }

    // Function untuk buka halaman insert mahasiswa (tambah_mahasiswa.blade.php)
    public function insertMahasiswa()
    {

        return view("tambah_mahasiswa");
    }

    // Function untuk insert data mahasiswa ke database
    public function insertData(Request $request)
    {

        Mahasiswa::create([

            "nim" => $request->nim,
            "nama" => $request->nama,
            "jenis_kelamin" => $request->jenis_kelamin,
            "jurusan" => $request->jurusan,
            "alamat" => $request->alamat
        ]);

        // Redirect ke route halaman utama
        return redirect("/mahasiswas");
    }

    // Function untuk buka halaman update mahasiswa (edit_mahasiswa.blade.php)
    public function updateMahasiswa($mahasiswaId)
    {

        $dataMahasiswa = Mahasiswa::find($mahasiswaId);

        return view("edit_mahasiswa")
            ->with("dataMahasiswa", $dataMahasiswa);
    }

    // Function untuk update data mahasiswa ke database
    public function updateData(Request $request, $mahasiswaId)
    {

        $dataUpdate = Mahasiswa::find($mahasiswaId);

        $dataUpdate->nim = $request->nim;
        $dataUpdate->nama = $request->nama;
        $dataUpdate->jenis_kelamin = $request->jenis_kelamin;
        $dataUpdate->jurusan = $request->jurusan;
        $dataUpdate->alamat = $request->alamat;

        $dataUpdate->save();

        // Redirect ke route halaman utama
        return redirect("/mahasiswas");
    }

    // Function untuk hapus data mahasiswa dari database
    public function deleteData($mahasiswaId)
    {

        $dataDelete = Mahasiswa::find($mahasiswaId);

        $dataDelete->delete();

        // Redirect ke route halaman utama
        return redirect("/mahasiswas");
    }
}
