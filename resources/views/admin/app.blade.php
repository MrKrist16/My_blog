<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/admin.css') }}">
</head>
<body>

    @yield('content')
    
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>