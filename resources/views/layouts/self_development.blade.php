<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Self development</title>
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
  <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/mystyle.css') }}" type="text/css">
</head>
<body>
  <div class="main-self-development">
    @include('layouts.navbar')

    <div class="intro-self-development">
      <div class="mask rgba-black-strong" style="height: auto; min-height: 100vh;">
        <div class="container-self-development columns-self-development">
          @foreach ($images as $image)
            <div class="hvrbox">
              <a href="{{ route('image.download', $image->id)}}">
                <img src="{{ asset("storage/$image->url") }}" class="hvrbox-layer_bottom">
                <div class="hvrbox-layer_top">
                  <div class="hvrbox-text">Download</div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
        <div class="pagination-div">{{ $images->links("pagination::simple-bootstrap-4") }}</div>
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


