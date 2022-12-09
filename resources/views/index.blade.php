@extends('template.template_web')

@section('title', 'Halaman Home')

<link rel="stylesheet" href=" {{ asset('css/index_style.css') }} ">

@section('header-content')

    <div class="container justify-content-between d-flex mt-4">

        <h1 class="m-0">Tabel Mahasiswa</h1>

        <a class="btn btn-success mt-2" href="{{ url('/mahasiswas/insertMahasiswa') }}">Tambah Mahasiswa</a>


    </div>

    <div class="container">

        <hr>
    </div>

@endsection

@section('main-content')

    <div class="container">

        <table class="table table-striped">

            <thead>

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

                <?php

                $number = 0;
                ?>

                @foreach ($dataMahasiswa as $data)
                    <tr class="vertical-align-content">

                        <td scope="row">{{ $number += 1 }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->jurusan }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>

                            <a class="btn btn-warning"
                                href=" {{ url('/mahasiswas/detailMahasiswa/' . $data->id) }} ">Detail</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
