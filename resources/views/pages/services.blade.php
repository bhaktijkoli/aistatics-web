@extends('layouts.master')
@section('pre')
  @php
  $title = "Services | A.I statics technology";
  @endphp
@endsection
@section('content')
  <section id="hero" data-parallax="scroll" data-image-src="/img/about_us.jpg">
    <div class="backdrop"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center">
            <h1 class="title">Our Services</h1>
            <span class="sub-title">We Are Here to Deliver A Value to Your Career Profile!!!</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="services">
      <div class="container">
        <header class="section-header">
          <h3>Our Services</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>
        <div class="row">
          @php
          $services = array(
            array(
              'title' => 'Machine Learning',
              'desc' => 'Find insights hidden in data without explicitly being told where to look or what to conclude with machine learning technology.',
              'img' => 'machine_learning',
            ),
            array(
              'title' => 'Natural Language Processing',
              'desc' => 'Automatically extract critical business insights and emerging trends from large amounts of structured and unstructured content.',
              'img' => 'machine_learning',
            ),
            array(
              'title' => 'Forecasting And Optimization',
              'desc' => 'Predict outcomes and find the best results given resource constraints with forecasting and optimization technology.',
              'img' => 'machine_learning',
            )
          );
          $delay=3;
          @endphp
          <div class="row flex-items-xs-middle flex-items-xs-center">
            @foreach ($services as $service)
              <div class="col-xs-12 col-lg-4">
                <div class="card wow fadeInUp" data-wow-delay="{{$delay++*100}}ms">
                  <div class="card-block">
                    <div class="card-image">
                      <img src="/img/{{$service['img']}}.jpg"/>
                    </div>
                    <h4 class="card-title">
                      {{$service['title']}}
                    </h4>
                    <p>{{$service['desc']}}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
