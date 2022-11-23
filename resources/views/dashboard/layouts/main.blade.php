<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/mystyle/css/dashboard.css">
    <link rel="stylesheet" href="/assets/fontawesome-pro/css/all.min.css">
    <link rel="stylesheet" href="/mystyle/css/main.css">
    <link rel="stylesheet" href="/mystyle/css/sidebar.css">
    <link rel="stylesheet" href="/mystyle/css/blog.css">
    <link rel="shortcut icon" href="/image/favicon.png">
    <link rel="stylesheet" href="/mystyle/css/trix.css">
    <title>Ilham Blog's | {{ $title }}</title>
</head>

<body>
    <div class="row">
        <div class="col-md-2 col-sm-2">
            @include('dashboard.components.header')
            @include('dashboard.components.sidebar')
        </div>
        <div class="col-md-10">
            <div class="toggler-menu">
                <button id="menu-btn" class="btn">
                    <span class="fal fa-bars"></span>
                </button>
            </div>
            <h1 class="display-5 text-center">{{ $display }}</h1>
            <hr>
            @yield('content')
        </div>
    </div>
</body>
<script src="/assets/chart/dist/chart.umd.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/mystyle/js/dashboard.js"></script>
<script src="/mystyle/trix.js"></script>
</html>