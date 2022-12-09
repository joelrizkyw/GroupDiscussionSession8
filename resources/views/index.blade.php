@extends('template.template_web')

@section('title', 'Halaman Home')

<link rel="stylesheet" href=" {{ asset('css/index_style.css') }} ">

@section('header-content')

    <div class="container mt-4">

        <h1 class="m-0">Tabel Mahasiswa</h1>

        <br>
        <hr>
    </div>

@endsection

@section('main-content')

    <div class="container">

        <table class="table table-striped">

            <thead>

                @forelse
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>

                <tr class="vertical-align-content">

                    <td scope="row">1</td>
                    <td>2440050981</td>
                    <td>Joel Rizky Wahidiyat</td>
                    <td>Laki-laki</td>
                    <td>Teknik Informatika</td>
                    <td>Depok</td>
                    <td>

                        <a class="btn btn-warning" href=" {{ url('/mahasiswas/1') }} ">Detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
