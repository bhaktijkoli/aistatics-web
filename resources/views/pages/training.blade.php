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
            <header class="section-header">
              <h3>Curriculum</h3>
            </header>
          </div>
          <div class="col-sm-12">
            <ul id="curriculum-list">
              @php
              $sections = explode('</ul>', $training->curriculum);
              @endphp
              @foreach ($sections as $section)
                @php
                $sectionName = explode('<ul>', $section)[0];
                $section = str_replace($sectionName, '', $section);
                $topics = explode('</li>', $section);
                @endphp
                @if (strlen(strip_tags($sectionName)) < 5)
                  @break;
                @endif
                <li class="item">
                  <a data-toggle="collapse" class="{{$loop->first?'':'collapsed'}}" href="#curriculum{{$loop->iteration}}" aria-expanded="{{$loop->first?true:false}}">{{strip_tags($sectionName)}}<i class="ion-md-remove"></i></a>
                  <div id="curriculum{{$loop->iteration}}"  class="collapse {{$loop->first?'show':''}}" data-parent="#curriculum-list">
                    <ol>
                      @foreach ($topics as $topic)
                        @if (strlen(strip_tags($topic)) < 5)
                          @break;
                        @endif
                        <li>{{strip_tags($topic)}}</li>
                      @endforeach
                    </ol>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="space-100"></div>
        <div class="col-sm-12">
          <header class="section-header">
            <h3>Course Features</h3>
          </header>
        </div>
        <div class="col-sm-8">
          <ul>
            <li>Practical Hands on</li>
            <li>Timely Doubt Resolution</li>
            <li>Reference codes and study materials</li>
            <li>Module wise case study and projects</li>
            <li>Career guidance and career support</li>
          </ul>
        </div>
        <div class="space-100"></div>
        <div class="col-sm-12">
          <header class="section-header">
            <h3>Career services</h3>
          </header>
          <p>Our career services work closely with you throughout the program. We help you identify your strengths and weaknesses, determine career interests, and spot employment opportunities. We empower our students to become self-sufficient in navigating the everchanging employment landscape.</p>
        </div>
        <div class="col-sm-8">
          <h4>Digital Profile Building</h4>
          <p>At graduation, you will have an extensive and rich GitHub portfolio, several storytelling blogs on Medium, and a résumé that does most of the speaking, LinkedIn presence.</p>
          <h4>Resume Building</h4>
          <p>Optimize your resume to match job filters for data science positions.</p>
          <h4>MOC Interviews</h4>
          <p>Find out how to answer critical interview questions that make or break the deal.</p>
          <h4>Personality Development</h4>
          <p>Help you in the journey from an intermediate to a professional.</p>
        </div>
      </div>
    </section>
  </main>
@endsection
