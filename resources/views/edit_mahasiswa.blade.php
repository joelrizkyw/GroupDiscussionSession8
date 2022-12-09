<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>

    <!-- NIM, Nama, Jenis kelamin, jurusan, alamat -->
    <div class="container">
        <h1 class="pt-5">Edit Mahasiswa</h1>
        <form action="{{ route('update-data', $dataMahasiswa->id) }}" method="POST">

            @csrf

            @method('PATCH')

            <div class="form-group pt-2">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukan NIM"
                    value="{{ $dataMahasiswa->nim }}">
            </div>
            <div class="form-group pt-2">
                <label for="name">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama" id="name"
                    placeholder="Masukan nama mahasiswa" value="{{ $dataMahasiswa->nama }}">
            </div>
            <label for="" class="pt-2">Jenis Kelamin</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1"
                    value="Laki-Laki" @if ($dataMahasiswa->jenis_kelamin === 'Laki-Laki') checked @endif>
                <label class="form-check-label" for="exampleRadios1">
                    Laki-Laki
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2"
                    value="Perempuan" @if ($dataMahasiswa->jenis_kelamin === 'Perempuan') checked @endif>
                <label class="form-check-label" for="exampleRadios2">
                    Perempuan
                </label>
            </div>


            <div class="form-group pt-2">
                <label for="jurusan">Jurusan</label>
                <input name="jurusan" type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan"
                    value="{{ $dataMahasiswa->jurusan }}">
            </div>
            <div class="form-group pt-2">
                <label for="Alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Masukan alamat">{{ $dataMahasiswa->alamat }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</body>

</html>
