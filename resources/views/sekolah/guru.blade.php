<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    {{-- Font Source --}}
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Exo 2', sans-serif;
        }
    </style>
    <title>Data {{ $title }}</title>
</head>

<body>
<h5>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container border-bottom border-dark">
        <img src="https://smkassalaambandung.sch.id/img/logo-custom.png" width="70" height="50" margin>

            <a class="navbar-brand" href="/">
                <b>Laravel</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-pills ms-auto mb-2 pt-3 pt-sm-0 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Siswa' ? 'active bg-dark text-white px-3' : '' }}"
                            href="/sekolah/siswa">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Guru' ? 'active bg-dark text-white px-3' : '' }}"
                            href="/sekolah/guru">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Jurusan' ? 'active bg-dark text-white px-3' : '' }}"
                            href="/sekolah/jurusan">Data Jurusan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container col-md-8">
        <div class="card shadow-lg mt-5 p-4" data-aos="zoom-in-down">
            <h2>
                <b>Data Guru</b>
            </h2>
            <div class="table-responsive mt-4">
                <table class="table table-bordered border-dark table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nomor</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Mata Pelajaran</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($sekolah as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->mapel }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->umur }} Tahun</td>
                                <td>{{ $data->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
        });
    </script>
</h5>
</body>

</html>
