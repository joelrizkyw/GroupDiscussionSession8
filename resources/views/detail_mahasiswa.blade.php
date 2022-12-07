@extends('template.template_web')

@section('title', 'Detail Mahasiswa')

@section('header-content')

    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center">

            <h1 class="m-0">Nama Mahasiswa</h1>

            <div class="buttons mt-3">

                <a class="btn btn-primary" href="#">Edit</a>

                <a class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>

        <br>
        <hr>
    </div>
@endsection

@section('main-content')

    <div class="container">

        <ul>

            <li>NIM: ...</li>
            <li>Nama: ...</li>
            <li>Jenis Kelamin: ...</li>
            <li>Jurusan: ...</li>
            <li>Alamat: ...</li>
        </ul>
    </div>
@endsection
