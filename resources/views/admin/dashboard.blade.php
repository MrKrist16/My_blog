<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <p>Dashboard</p>

    @if(auth()->check())
        <h4>Hi {{ auth()->user()->name }}</h4>
    @endif
</body>
</html>