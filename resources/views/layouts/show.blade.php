<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$article->title}}</title>
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
  <div class="main-show">
    @include('layouts.navbar')
        <div class="intro-show">
            <div class="mask rgba-black-strong" style="height: 100%;">
                <div class="image-for-article-div">
                    <img class="image-for-article" src="{{ asset("storage/$article->image") }}">
                </div>
                <div class="title-for-article-div">
                    <h1 class="title-for-article">{{$article->title}}</h2>
                </div>
                <div class="short-description-for-article-div">
                <p class="short-description-for-article">{{$article->short_description}}</p>
                </div>
                <div class="description-for-article-div">
                    <p class="description-for-article">{{$article->description}}</p>
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
  <!-- My custom scripts -->
  <script type="text/javascript" src="{{ asset('storage/bootstrap/js/myScript.js') }}"></script>

</body>
</html>


