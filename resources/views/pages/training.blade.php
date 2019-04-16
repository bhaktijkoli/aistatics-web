@extends('layouts.master')
@section('pre')
  @php
  $title = $training->name;
  $rating = $training->rating;
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
              @if ($training->admissions == '1')
                &nbsp;|&nbsp;
                Admissions Open Now
              @endif
            </p>
            <div class="counter-container">
              <div class="counter">
                <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$training->hours}} Instructor Hours</p>
              </div>
              <div class="counter">
                <p><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;{{$training->assignments}}+ Assignments</p>
              </div>
              <div class="counter">
                <p><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{$training->students}}+ Students Guided</p>
              </div>
            </div>
            <a href="#" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Download Boucher</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="training_overview">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <header class="section-header">
              <h3>Program Overview</h3>
            </header>
          </div>
          <div class="col-sm-8">
            <h4>Program Objective</h4>
            <p class="output">
              {!!$training->objective!!}
            </p>
          </div>
          <div class="col-sm-4">
            <div class="card shadow wow fadeInUp">
              <div class="card-body">
                <h4 class="card-title">Required More Information</h4>
                <form class="" action="" method="post">
                  <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" id="firstname">
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" id="lastname">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone">
                  </div>
                  <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <h4>Program Outcomes</h4>
            <p class="output">
              {!!$training->outcomes!!}
            </p>
          </div>
          <div class="col-sm-12">
            <h4>Target Audience</h4>
            <p class="output">
              {!!$training->audience!!}
            </p>
          </div>
          <div class="col-sm-12">
            <h4>Curriculum</h4>
            <p class="output">
              {!!$training->curriculum!!}
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
