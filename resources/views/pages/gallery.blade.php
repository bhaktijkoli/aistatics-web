@extends('layouts.master')
@section('pre')
  @php
  $title = "About Us | A.I statics technology";
  @endphp
@endsection
@section('content')
  <section id="hero" data-parallax="scroll" data-image-src="/img/about_us.jpg">
    <div class="backdrop"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center">
            <h1 class="title">Gallery</h1>
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
          @foreach (App\Event::all() as $event)
            <div class="col-sm-4">
              <div class="card wow fadeInUp">
                {{-- <img class="card-img-top" src="{{Voyager::image($event->frontimage)}}" alt="Card image"> --}}
                  <h4 class="card-title">{{$event->name}}<small class="badge badge-light">{{$event->type}}</small></h4>
                  <div class="card-img-top">
                    <img src="{{Voyager::image($event->frontimage)}}"/>
                  </div>
                  <div class="card-body">
                  <span class="card-text">
                    <span>Venue: </span>{{$event->venue}}</br>
                    <span>Presenter: </span>{{$event->presenter}}</br>
                    {{-- <span>Agenda: </span></br>
                    <ul>
                      @foreach (explode('.', $event->agenda) as $a)
                        @if (strlen($a) > 2)
                          <li>{{$a}}</li>
                        @endif
                      @endforeach
                    </ul> --}}
                  </span>
                  <a href="#" class="btn btn-primary" style="margin-top:20px">View Details</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection
