@extends('layouts.master')
@section('pre')
  @php
  $title = $training->name;
  $rating = 3.5;
  @endphp
@endsection
@section('content')
  <section id="training_welcome" style="background-image: url({{Voyager::image($training->image)}});">
    <div class="backdrop">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="title">{{$training->name}}</h1>
            <p class="subtitle">{{$rating}}
              @for ($i=1; $i <= 5; $i++)
                @if ($rating == "$i.5")
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                @elseif ($rating >= $i)
                  <i class="fa fa-star" aria-hidden="true"></i>
                @else
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                @endif
              @endfor
              &nbsp;|&nbsp;
              Admissions Open Now
            </p>
            <div class="counter-container">
              <div class="counter">
                  <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;65 Instructor Hours</P>
              </div>
            </div>
            {{$rating == "4.5"}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <main>

  </main>
@endsection
