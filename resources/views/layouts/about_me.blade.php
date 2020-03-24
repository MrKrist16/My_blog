<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>About me</title>
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
  <div class="main-about-me">
    @include('layouts.navbar')

    <div class="intro-about-me">
      <div class="mask mask-about-me rgba-black-strong"">
        <div class="about-me-div-photo">
          <img class="about-me-photo" src="{{ asset('storage/images/about-me-photo.jpg') }}" height="400">
        </div>
        <div class="about-me-div-text">
          <p class="about-me-text white-text">Hi, i am Sergii Kirnosov. I'm 16 age. I'm beginer full-stack web-developer. So this website was created to demonstrate my skils. I self learning, but you can not doubt in my knowledge. I want improve my skils and work in Upwork. You can see my projects in GitHub and can write to me in email. <a class="about-me-link" href="https://github.com/sergii-python-developer">My GitHub</a> and my email <b style="color: #30c452; font-weight: bold;">kirnosov200@gmail.com </b> also my <a class="about-me-link" href="https://www.instagram.com/sergii_kirnosov/">Instagram</a>. You can write me at any time for you. You can learn more about me in <a class="about-me-link" href="https://www.upwork.com/freelancers/~018f4ed4cb5048c092">Upwork</a>.</p>
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


