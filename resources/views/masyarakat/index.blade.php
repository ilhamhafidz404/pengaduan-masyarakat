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
  <body>

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

    <main class="container">

        <a href="{{ route('masyarakat.create') }}" class="btn btn-primary my-5">Tambah Laporan</a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Tanggal Pengaduan</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Isi Laporan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengaduan as $index=>$item)
                    <tr>
                        <td>
                            {{ $index+1 }}
                        </td>
                        <td scope="row">
                            <img 
                                class="img-thumbnail rounded" 
                                src="{{ asset('storage/'.$item->foto) }}" 
                                alt="Foto laporan ke-{{ $index+1 }}"
                                style="width: 100px; height: 100px; object-fit: cover"
                            >
                        </td>
                        <td class="position-relative">
                            <div class="position-absolute top-50 translate-middle-y">
                                {{ $item->tgl_pengaduan }}
                            </div>
                        </td>
                        <td class="position-relative">
                            <div class="position-absolute top-50 translate-middle-y">
                                {{ $item->nik }}
                            </div>
                        </td>
                        <td class="position-relative">
                            <div class="position-absolute top-50 translate-middle-y">
                                {{ $item->isi_laporan }}
                            </div>
                        </td>
                        <td class="position-relative">
                            <div class="position-absolute top-50 translate-middle-y">
                                @if ($item->status == 'selesai')
                                    <span class="badge text-bg-success">Ditanggapi</span>
                                @elseif ($item->status == 'proses')
                                    <span class="badge text-bg-warning">Dalam Proses</span>
                                @else
                                    <span class="badge text-bg-danger">Menuggu</span>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="6" class="text-center py-3">
                            Belum ada data Laporan anda
                        </th>
                    </tr>
                    
                @endforelse
            </tbody>
        </table>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
