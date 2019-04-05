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
            <h1 class="title">About Us</h1>
            <span class="sub-title">We Are Here to Deliver A Value to Your Career Profile!!!</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="profile">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <img class="img-fluid" src="/img/profile.png" alt="">
          </div>
          <div class="col-sm-8">
            <h4>Corporate Profile</h4>
            <p>AIS solutions is Analytics Training, Consulting and Solution company,
              established with vision to Build Analytics Ecosystem by empowering people in the field
              of Data Science through Real Industry Use Case Led Business Analytics Supervised
              Training.
            </p>
            <p>
              Today data is being generated in almost every aspect of our lives, in all
              processes and in all industries. Real Challenge is to extract meaningful information
              from this data for decision making.
            </p>
            <p>AIS solutions believe, data has lot to say but we need to train our eyes to
              interpret it, analytically driven decisions have the power to transform businesses. But
              data needs appropriate transformation to simplify discovery. Interpretation and
              communication of meaningful patterns in data is called Analytics. Interestingly, right
              time for a decision is a mystery which is wrapped in our conscious experience of
              things. The quantitative behaviour of time, which is often considered as the fourth
              dimension, plays a key role in the decision science around physical laws and theories.
            </p>
            <p>
              AIS solutions efforts to deliver right decision at right time makes the context of reactive
              decision-making a history through new venture on fourth dimension analytics as “AIS
              solutions”.
            </p>
            <p>
              In this context AIS solutions helping their customers to make analytics a
              foundation of corporate strategy, providing its customers with actionable insights from
              data which can help to provide substantial cost advantages, faster, better decision
              making, services improvements and help in providing inputs to new products. AIS
              solutions excel at providing evidence-based and data driven support in decision
              making to their customers, by integrating data regardless of size and structure. AIS
              solutions identify recurring patterns, builds metrics and implements integrated
              analytics systems that provide value, optimization and cost advantages. AIS solutions
              have a skilled team of professionals and domain experts who deliver strategically
              designed and efficient solutions to meet your business goals.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="goals" data-parallax="scroll" data-image-src="/img/slide1.jpg">
      <div class="backdrop"> </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="text-center">
              <h4>Our Goals</h4>
              <p>Develop a strong base of key company and Students based on data science.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text-center">
              <h4>Our Vision</h4>
              <ul>
                <li>To be a global leader in all the technology and management aspects of training, consulting and development.</li>
                <li>To make effective learning accessible to all the major industries across the globe.</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text-center">
              <h4>Our Mission</h4>
              <ul>
                <li>To bridge the gap between industry’s requirement & student’s skill set</li>
                <li>To rewrite the programs’ course content, such a way that it matches the skilled personnel requirement of the companies</li>
                <li>To create a ready and skilled human resource for furthering industry’s interests</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
