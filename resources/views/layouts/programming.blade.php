<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Programming</title>
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
  <div class="main-programming">
    @include('layouts.navbar')
    <div class="intro-programming">
      <div class="mask rgba-black-strong" style="height: 100%;">
        <div class="article-container article-columns">
          @foreach ($articles as $article)
            <div class="article">
              <img src="{{asset("storage/$article->image")}}">
              <div class="text">
                <h3>{{$article->title}}</h3>
                <p>{{$article->short_description}}</p>
              <a href="{{route('programming.show', $article->id)}}"><button class="btn purple-gradient">Read More...</button></a>
              <a href="#"><button class="btn purple-gradient">Views: {{ $article->views }}</button></a>
              </div>
            </div>
          @endforeach
        </div>
        <div class="pagination-div">{{ $articles->links("pagination::simple-bootstrap-4") }}</div>
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
  <!-- Masonry script -->
  <script type="text/javascript" src="{{ asset('storage/bootstrap/js/masonry.pkdg.min.js') }}"></script>

</body>
</html>


