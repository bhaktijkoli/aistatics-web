<header id="header">

  <div id="topbar">
    <div class="container">
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="logo float-left">
      <a href="/"><img id="header-logo" src="img/logo_white.png" alt="AI STATICS Logo" class="img-fluid"></a>
    </div>

    <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li class="active"><a href="">Home</a></li>
        <li><a href="{{route('about-us')}}">About Us</a></li>
        <li><a href="{{route('services')}}">Services</a></li>
        <li class="drop-down"><a href="">Trainings</a>
          <ul>
            <li><a href="{{route('training', 'machine-learning')}}">Machine learning</a></li>
            <li><a href="{{route('training', 'deep-learning')}}">Deep learning</a></li>
            <li><a href="{{route('training', 'natural-Language-processing')}}">Natural Language Processing</a></li>
            <li><a href="{{route('training', 'sas')}}">SAS</a></li>
            <li><a href="{{route('training', 'data-science')}}">Data Science</a></li>
            <li><a href="{{route('training', 'tableau')}}">Tableau</a></li>
          </ul>
        </li>
        <li><a href="">Students</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Contact Us</a></li>
      </ul>
    </nav>

  </div>
</header>
