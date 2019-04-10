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
    <section id="who_we_are">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h4>Who We Are?</h4>
            <p>
              AIS offers a comprehensive range of professional Financial Services and Analytics programs that are designed to cater to an aspiring group of professionals who want a tailored program on making them career ready. Our programs are driven by a constant need to be job relevant and stimulating, taking into consideration the dynamic nature of the Financial Services and Analytics market, and are taught by world class professionals with specific domain expertise.
            </p>
          </div>
          <div class="col-sm-4">
            <img class="img-fluid" src="/img/who_we_are.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section id="why_us">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="text-center">
              <h4>Why us?</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="service wow fadeInUp" data-wow-delay="300ms">
              <div class="icon">
                <img src="/img/team.svg" width="52"/>
              </div>
              <h4>The Best Team</h4>
              <p>As a family we ask for help and help when ask.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="service wow fadeInUp" data-wow-delay="400ms">
              <div class="icon">
                <img src="/img/quality.svg" width="52"/>
              </div>
              <h4>Quality</h4>
              <p>We are proud to stand behind the quality of work we deliver.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="service wow fadeInUp" data-wow-delay="500ms">
              <div class="icon">
                <img src="/img/integrity.svg" width="52"/>
              </div>
              <h4>Integrity</h4>
              <p>We always act with integrity through honesty, fairness and accountability.</p>
            </div>
          </div>
          <div class="offset-2 col-sm-4">
            <div class="service wow fadeInUp" data-wow-delay="600ms">
              <div class="icon">
                <img src="/img/simple.svg" width="52"/>
              </div>
              <h4>Keeping it simple</h4>
              <p>Our team of straight forward, logical thinking people with a common-sense approach to business avoid complexities to get the job done.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="service wow fadeInUp" data-wow-delay="700ms">
              <div class="icon">
                <img src="/img/low_cost.svg" width="52"/>
              </div>
              <h4>Achieving Lowest Cost</h4>
              <p>We never lose sight of good values, we are able to deliver the best solution for you through working with multiple suppliers.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
