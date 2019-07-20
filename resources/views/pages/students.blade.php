@extends('layouts.master')
@section('pre')
  @php
  $title = "Our Students | A.I statics technology";
  @endphp
@endsection
@section('content')
  <section id="hero" data-parallax="scroll" data-image-src="/img/about_us.jpg">
    <div class="backdrop"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center">
            <h1 class="title">Students</h1>
            <span class="sub-title">We Are Here to Deliver A Value to Your Career Profile!!!</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="students-projects">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <header class="section-header">
              <h3>Students Projects</h3>
            </header>
            <p class="text-center" style="padding: 0px 10%;">AIS’s Program in Data Science, Machine Learning and Deep Learning gives you the opportunity to work on real industry datasets. We encourage our enrollees to build models that create value for the employer. Feel free to peruse through the projects portfolio to see the kind of impact AIS students make.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="students-reviews">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <header class="section-header">
              <h3>Students Reviews</h3>
              <p class="text-center" style="padding: 0px 10%;">What our students say about us?</p>
            </header>
            <div class="space-50"></div>
            <div id="student-review-caraousel" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                @foreach (\App\StudentReview::all() as $review)
                  <li data-target="#student-review-caraousel" data-slide-to="{{$loop->index}}" class="{{$loop->first?'active':''}}"></li>
                @endforeach
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner" style="padding: 10px 15%;">
                @foreach (\App\StudentReview::all() as $review)
                  <div class="carousel-item {{$loop->first?'active':''}}">
                    <div class="media p-3">
                      <img src="{{Voyager::image($review->image)}}" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                      <div class="media-body">
                        <h4>{{$review->name}}</h4>
                        <p>{{$review->review}}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#student-review-caraousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#student-review-caraousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
