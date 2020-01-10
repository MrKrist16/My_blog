
<script type="text/javascript" src="{{ asset('storage/bootstrap/js/jquery-3.4.1.min.js') }}"></script>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container">
    <a href="/" class="navbar-brand" style="font-family: 'Open Sans', sans-serif;">Tech Blog</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle Navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="basicExampleNav">
      <ul class="navbar-nav mr-auto smooth-scroll">
        <li class="nav-item">
          <a href="/programming" class="nav-link waves-effect waves-light" style="font-family: 'Open Sans', sans-serif;">Programming</a>
        </li>
        <li class="nav-item">
          <a href="/self_development" class="nav-link waves-effect waves-light" style="font-family: 'Open Sans', sans-serif;">Self Development</a>
        </li>
        <li class="nav-item">
          <a href="/about_me" class="nav-link waves-effect waves-light" style="font-family: 'Open Sans', sans-serif;">Contact with me</a>
        </li>
      </ul>
      <div class="musicPlayer navbar-nav mr-auto smooth-scroll">
        <div id="songTitle">Demo</div>
        <div class="buttons nav-link">
          <button id="mix" class="waves-effect waves-light"></button>
          <button id="pre" onclick="pre()" type="button" class="waves-effect waves-light"></button>
          <button id="play" onclick="playOrPauseSong()" type="button" class="waves-effect waves-light"></button>
          <button id="next" onclick="next()" type="button" class="waves-effect waves-light"></button>
          <button id="replay" class="waves-effect waves-light"></button>
        </div>
        <div id="seek-bar">
          <div id="fill"></div>
          <div id="handle"></div>
        </div>
      </div>
    </div>
  </div>
</nav>

<script type="text/javascript" src="{{ asset('storage/bootstrap/js/audioplayer.js') }}"></script>