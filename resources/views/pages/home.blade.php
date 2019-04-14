@extends('layouts.master')
@section('pre')
  @php
    $title = "Welcome to A.I statics technology";
  @endphp
@endsection
@section('content')
  <section id="welcome">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <div class="space"></div>
          <h1 >Welcome to A.I statics technology</h1>
          <div class="col-sm-6" style="margin-top:50px">
            <div class="item">
              <div class="icon">
                <img src="/img/industry.svg" width="32"/>
              </div>
              <p class="text">Industry Solutions</p>
            </div>
            <div class="item">
              <div class="icon">
                <img src="/img/training.svg" width="32"/>
              </div>
              <p class="text">Corporate training</p>
            </div>
            <div class="item">
              <div class="icon">
                <img src="/img/project.svg" width="32"/>
              </div>
              <p class="text">Project guidance</p>
            </div>
            <div class="item">
              <div class="icon">
                <img src="/img/certified.svg" width="32"/>
              </div>
              <p class="text">Certified Internship</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
        $tranings = array(
          array(
            'title' => 'Machine learning',
            'desc' => 'Machine learning is a form of artificial intelligence that automates data analysis to enable computers to learn and adapt from experience. With machine learning, computers can perform specific tasks without precise programming.',
            'img' => 'machine_learning',
          ),
          array(
            'title' => 'Deep learning',
            'desc' => 'The field of artificial intelligence is essentially when machines can do tasks that typically require human intelligence. It encompasses machine learning, where machines can learn by experience and acquire skills without human involvement.',
            'img' => 'deep_learning',
          ),
          array(
            'title' => 'Natural Language Processing',
            'desc' => 'Natural language processing (NLP) is a branch of AI that helps computers understand, interpret and manipulate human language. NLP draws from many disciplines, including computer science and computational linguistics in its pursuit to fill the gap.',
            'img' => 'machine_learning',
          ),
          array(
            'title' => 'SAS',
            'desc' => 'SAS (Statistical Analysis Systems) is a product suite created by SAS Institute that performs multivariate investigations, advanced analytics, data management, business intelligence, and various different duties. It’s utilized for quite a while by several significant organization.',
            'img' => 'machine_learning',
          ),
          array(
            'title' => 'Data Science',
            'desc' => 'Data Science is the study which deals with identification, extraction, and representation of meaningful information from raw data set to be used for business determinations. Data science, also known as data-driven science, is an interdisciplinary field about scientific methods.',
            'img' => 'data_science',
          ),
          array(
            'title' => 'Tableau',
            'desc' => 'Tableau is a data visualization software that is used for data science and business intelligence. Tableau can create a wide range of different visualization to interactively present the data and showcase insights. It comes with tools that allow to drill down data and see the impact in a visual format.',
            'img' => 'tableau',
          ),
        );
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
                    <p>{{$traning->description}}</p>
                    <a href="{{route('training', $traning->slug)}}" class="btn">Read more</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    </main>
    <div style="height:1000px;">
    </div>
  @endsection
