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
    <section id="events-gallery">
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
  </main>
@endsection
