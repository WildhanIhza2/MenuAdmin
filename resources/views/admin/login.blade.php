<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
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

                <!-- Judul -->
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3 class="text-primary">JavaZone</h3>
                    <h3 class="text-light">Login Admin</h3>
                </div>

                <!-- Tampilkan error jika ada -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <!-- Form login -->
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                        <label for="floatingInput">Email</label>
                    </div>

                    <!-- Password -->
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label class="form-check-label text-light" for="remember">Ingat Saya</label>
                        </div>
                        <a href="#" class="text-light">Lupa Password?</a>
                    </div>

                    <!-- Tombol Submit -->
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                </form>

                <!-- Link ke Register -->
                <p class="text-center mb-0 text-light">
                    Belum punya akun? <a href="{{ route('admin.register') }}" class="text-primary">Daftar di sini</a>
                </p>

            </div>
        </div>
    </div>
</div>
</body>
</html>
