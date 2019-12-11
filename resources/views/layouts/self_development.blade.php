<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Self development</title>
  <!-- MDB icon ( Ed-->
  <link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/mdb.min.css') }}">
  <!-- Custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/mystyle.css') }}" type="text/css">
</head>
<body>
  <div class="main-self-development">
    @include('layouts.navbar')

    <div class="intro-self-development">
      <div class="mask rgba-black-strong" style="height: auto; min-height: 100vh;">
        <div class="div-self-development">
          <div class="blur">
            <a href="">
              <img src="{{ asset('storage/uploads/1.jpg') }}">
            </a>
          </div>
          <div class="blur">
            <a href="">
              <img src="{{ asset('storage/uploads/2.jpg') }}">
            </a>
          </div>
          <div class="blur">
            <a href="">
              <img src="{{ asset('storage/uploads/3.jpg') }}">
            </a>
          </div>
          <div class="blur">
            <a href="">
              <img src="{{ asset('storage/uploads/4.jpg') }}">
            </a>
          </div>
          <div class="blur">
            <a href="">
              <img src="{{ asset('storage/uploads/5.jpg') }}">
            </a>
          </div>
          <div class="blur">
            <a href="">
              <img src="{{ asset('storage/uploads/6.jpg') }}">
            </a>
          </div>
          <div class="blur">
            <a href="">
              <img src="{{ asset('storage/uploads/7.jpg') }}">
            </a>
          </div>
        </div>
      </div>
    </div>

    @include('layouts.footer')
  </div>

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('storage/bootstrap/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('storage/bootstrap/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('storage/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('storage/bootstrap/js/mdb.min.js') }}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>


