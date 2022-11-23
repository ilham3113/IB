<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/fontawesome-pro/css/all.min.css">
    <link rel="stylesheet" href="/mystyle/style.css">
    <link rel="shortcut icon" href="/image/favicon.png">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
    @include('front-end.components.header')
    @yield('content')
    </div>
@include('front-end.components.footer')

</body>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/mystyle/js/script.js"></script>
</html>
