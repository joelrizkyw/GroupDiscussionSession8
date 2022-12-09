@extends('template.template_web')

@section('title', 'Detail Mahasiswa')

@section('header-content')

    <div class="container mt-4">

        <a class="btn btn-secondary mb-2" href=" {{ route('home-mahasiswa') }} ">Back</a>

        <div class="d-flex justify-content-between align-items-center">

            <h1 class="m-0">Biodata {{ $dataDetail->nama }}</h1>

            <div class="d-flex buttons">

                <a class="btn btn-primary" href="{{ route('update-mahasiswa', $dataDetail->id) }}">Edit</a>

                <form method="POST" action="{{ route('delete-data', $dataDetail->id) }}">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger ms-2">Delete</button>
                </form>
            </div>
        </div>

        <hr>
    </div>
@endsection

@section('main-content')

    <div class="container">

        <ul>

            <li>NIM: {{ $dataDetail->nim }}</li>
            <li>Nama: {{ $dataDetail->nama }}</li>
            <li>Jenis Kelamin: {{ $dataDetail->jenis_kelamin }}</li>
            <li>Jurusan: {{ $dataDetail->jurusan }}</li>
            <li>Alamat: {{ $dataDetail->alamat }}</li>
        </ul>
    </div>
@endsection
