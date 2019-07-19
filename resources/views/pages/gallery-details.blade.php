@extends('layouts.master')
@section('pre')
  @php
  $title = "$event->name | A.I statics technology";
  $navtoggle = true;
  $images = json_decode($event->images);
  @endphp
@endsection
@section('content')
  <main id="main">
    <section id="gallery-details">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1>{{$event->name}}</h1>
            <span class="badge badge-light">{{$event->type}}</span></br>
            <span> <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{{$event->date}} </span>&nbsp;
            <span> <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$event->fromTime}} to {{$event->toTime}} </span>
          </div>
          <div class="col-sm-12">
            <div id="gallery-carousel" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                @foreach ($images as $image)
                  <li data-target="#gallery-carousel" data-slide-to="{{$loop->index}}" class="{{$loop->first?'active':''}}"></li>
                @endforeach
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                @foreach ($images as $image)
                  <div class="carousel-item {{$loop->first?'active':''}}">
                    <img src="{{Voyager::image($image)}}">
                  </div>
                @endforeach
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#gallery-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#gallery-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>
          </div>
          <div class="col-sm-12">
            <div class="gallery-text">
              <p><span>Venue: </span>{{$event->venue}}</p>
              <p><span>Presenter: </span>{{$event->presenter}}</p>
              <p><span>Agenda: </span>
                <ul>
                  @foreach (explode('.', $event->agenda) as $a)
                    @if (strlen($a) > 2)
                      <li>{{$a}}</li>
                    @endif
                  @endforeach
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
