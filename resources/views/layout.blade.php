<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <title>Testing Laravel 6!</title>

</head>
<body class="text-center" style="padding: 20px;background-color: #C6C8CA">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@endif

@yield('content')
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
