<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            background-image: url({{ asset('images/login-bg.jpg') }});
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
        }
        section{
            width: 100%;
            height: 100%;
            background-color: red;
        }
        .card{
            width: 700px;
        }
        h1{
            font-size: 25px
        }

    </style>
  </head>
  <body>

    <section>
        <div class="card position-absolute top-50 start-50 translate-middle p-4 shadow">
            <h1 class="mb-5 text-center">REGISTER ACCOUNT MASYARAKAT</h1>
            <form action="{{ route('register.masyarakat') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input 
                        type="text" 
                        class="form-control @error('nik') is-invalid @enderror" 
                        id="nik" 
                        name="nik"
                    >
                    @error('nik')
                        <div class="text-danger col-12">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="telp" class="form-label">Nomor Telepon</label>
                    <input 
                        type="text" 
                        class="form-control @error('telp') is-invalid @enderror" 
                        id="telp" 
                        name="telp"
                    >
                    @error('telp')
                        <div class="text-danger col-12">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nama" class="form-label">Nama</label>
                        <input 
                            type="text" 
                            class="form-control @error('nama') is-invalid @enderror" 
                            id="nama" 
                            name="nama"
                        >
                        @error('nama')
                            <div class="text-danger col-12">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="username" class="form-label">Username</label>
                        <input 
                            type="text" 
                            class="form-control @error('username') is-invalid @enderror" 
                            id="username" 
                            name="username"
                        >
                        @error('username')
                            <div class="text-danger col-12">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="password" class="form-label">Password</label>
                        <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password"
                        >
                    </div>
                    <div class="col">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="confirm_password" 
                            name="confirm_password"
                        >
                    </div>
                    @error('password')
                        <div class="text-danger col-12">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 py-2">Submit</button>
                </div>
                <div class="text-center">
                    <p class="m-0">
                        Sudah punya akun? 
                        <a href="{{ route('login.masyarakat') }}">Login</a>    
                    </p>.
                </div>
            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
