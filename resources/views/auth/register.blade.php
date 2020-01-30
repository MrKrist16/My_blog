<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Authentication</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <!-- MDB icon ( Ed-->
  <link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/mdb.min.css') }}">
  <!-- Custom styles (optional) -->
  <!-- <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/authstyle.css') }}" type="text/css"> -->
</head>
<body>
  <div class="authRegister">
    <form method="POST" action="/register">
      {!! csrf_field() !!}

      <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
      </div>

      <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
      </div>

      <div>
        Password
            <input type="password" name="password">
      </div>

      <div>
        Confirm Password
        <input type="password" name="password_confirmation">
      </div>

      <div>
        <button type="submit">Register</button>
      </div>
    </form>
  </div>
</body>
</html>