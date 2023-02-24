<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
  </head>
  <body class="bg-light">

    @if (Session::has('message'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">{{ Session::get('status') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ Session::get('message') }}
                </div>
            </div>
        </div>
    @endif



    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">SISPEMAS</a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNavDropdown" 
                aria-controls="navbarNavDropdown" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div 
                class="collapse navbar-collapse d-flex justify-content-end align-items-center" 
                id="navbarNavDropdown"
            >
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a 
                            class="nav-link dropdown-toggle" 
                            href="#" 
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false"
                        >
                            Nama Pengguna
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header 
        class="
            bg-primary 
            text-white 
            d-flex 
            align-items-center 
            justify-content-center
        " 
        style="height: 400px"
    >
        <h1>BUAT PEGADUAN</h1>
    </header>

    <main class="container shadow bg-white rounded p-5" style="margin-top: -100px">
        <div class="row">
            <div class="col">
                <h1>wefewfewf</h1>
            </div>
            <div class="col">
                <form action="{{ route('masyarakat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal Pengaduan</label>
                        <input 
                            type="date" 
                            class="form-control" 
                            id="tgl" 
                            name="tgl"
                            value="{{ date('Y-m-d') }}"
                            readonly
                            disabled
                        >
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input 
                            type="text" 
                            class="form-control bg-light" 
                            id="nik" 
                            name="nik"
                            value="20220810052"
                            readonly
                        >
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi Laporan</label>
                        <textarea 
                            name="isi" 
                            id="isi" 
                            class="form-control"
                            style="min-height: 250px"
                        ></textarea>
                        @error('isi')
                            <div class="text-danger col-12">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="foto" class="form-label">Foto</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                        @error('foto')
                            <div class="text-danger col-12">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="mt-5 d-flex justify-content-between">
                        <div>
                            <a href="{{ route('masyarakat.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                        <div>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @if (Session::has('message'))
        <script>
            const toastContainer = document.getElementById('toast')
            const toast = new bootstrap.Toast(toastContainer)
            toast.show()
        </script>
    @endif
  </body>
</html>
