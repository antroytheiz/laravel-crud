<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Home | Pemrograman Web</title>
</head>
<body style="background-image: url('https://images.pexels.com/photos/3473569/pexels-photo-3473569.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
    <header class="masthead d-flex" style="margin-top: 15%">
        <div class="container text-center my-auto text-white">
          <h1 class="mb-1">Data Pegawai | Pendapatan Pegawai</h1>
          <h3 class="mb-5">
            <em>Dortheis Andatu - 05211940007003</em>
          </h3>
          <a class="btn btn-info btn-xl js-scroll-trigger" href="{{ route('pegawai') }}">Data Pegawai</a>
          <a class="btn btn-info ss btn-xl js-scroll-trigger" href="{{ route('pendapatan') }}">Pendapatan Pegawai</a>
          {{-- <a class="btn btn-info ss btn-xl js-scroll-trigger" href="{{ route('tugas') }}">Tugas Pegawai</a> --}}
        </div>
        <div class="overlay"></div>
      </header>
</body>
</html>