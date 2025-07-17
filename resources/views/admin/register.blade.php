<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000 !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-dark rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>JavaZone</h3>
                        </a>
                        <h3 class="text-light">Register</h3>
                    </div>

                    {{-- Menampilkan pesan error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- FORM dimulai --}}
                    <form method="POST" action="{{ route('admin.register.submit') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="jhondoe" required>
                            <label for="name">Username</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                            <label for="email">Email</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-light" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="#">Forgot Password</a>
                        </div>

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Register</button>
                    </form>

                    <p class="text-center mb-0 text-light">
                        Sudah memiliki Akun? <a href="{{ route('admin.login') }}">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
