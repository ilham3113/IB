<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/fontawesome-pro/css/all.min.css">
    <link rel="stylesheet" href="/mystyle/validation.css">
    <title>{{ $title }}</title>
</head>
<body>
    <main>
        @if (session()->has('gagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('gagal') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1 class="h2 text-dark">Ilham Blog's</h1>
        @yield('content')
    </main>
</body>
<script src="/mystyle/validation.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
</html>