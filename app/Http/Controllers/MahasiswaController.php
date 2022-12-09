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
    public function insertData()
    {

        // Redirect ke route halaman utama
        return redirect("/mahasiswas");
    }

    // Function untuk buka halaman update mahasiswa (edit_mahasiswa.blade.php)
    public function updateMahasiswa($mahasiswaId)
    {

        return view("edit_mahasiswa");
    }

    // Function untuk update data mahasiswa ke database
    public function updateData($mahasiswaId)
    {

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
