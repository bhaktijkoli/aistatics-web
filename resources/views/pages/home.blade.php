@extends('layouts.master')
@section('pre')
  @php
  $title = "Welcome to A.I statics technology";
  @endphp
@endsection
@section('content')
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slider/slide1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4 wow fadeInUp">
                      Welcome to
                      <span class="color-b">AI </span> Statics
                    </h1>
                    <ul class="list">
                      @php
                        $aitems = array(
                          array('name'=>'Industry Solutions', 'img'=> 'industry'),
                          array('name'=>'Corporate training', 'img'=> 'training'),
                          array('name'=>'Project guidance', 'img'=> 'project'),
                          array('name'=>'Certified Internship', 'img'=> 'certified')
                        );
                      @endphp
                      @foreach ($aitems as $item)
                        <li>
                          <div class="list-item wow fadeInLeft" data-wow-delay="{{100*($loop->index+1)}}ms">
                            <div class="list-img">
                              <img src="{{url('/img/'.$item['img'].'.svg')}}"/>
                            </div>
                            <div class="list-text">
                              {{$item['name']}}
                            </div>
                          </div>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <main id="main">
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/about-img.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Our Aim</h2>
              <p>We help companies and student projects teams get the skills they need to succeed in the digital economy. We help companies and student projects teams get the skills they need to succeed in the digital economy. We want your organization to be able to explore and gain meaningful insights from your data. We specialize in teaching your employees to explore the infrastructure we help you create.</p>
              <p style="float:right">-Prajyot Patil (Data Science,M.Sc Statistics)<p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Change Your Life. Start Here.</h3>
              <p class="cta-text">Attend a free counselling session, and get the support you need</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Book Appointment</a>
            </div>
          </div>
        </div>
      </section>
      <section id="training" class="section-bg">
        @php
        $delay = 3;
        @endphp
        <div class="container">
          <header class="section-header">
            <h3>Our Trainings</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </header>
          <div class="row flex-items-xs-middle flex-items-xs-center">
            @foreach (App\Training::all() as $traning)
              <div class="col-xs-12 col-lg-4">
                <div class="card wow fadeInUp" data-wow-delay="{{$delay++*100}}ms">
                  <div class="card-block">
                    <div class="card-image">
                      <img src="{{Voyager::image($traning->image)}}"/>
                    </div>
                    <h4 class="card-title">
                      {{$traning->name}}
                    </h4>
                    <p style="display: -webkit-box; overflow : hidden; text-overflow: ellipsis; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">{{$traning->description}}</p>
                    <a href="{{route('training', $traning->slug)}}" class="btn">Read more</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    </main>
  @endsection
