@extends('layouts.master')
@section('pre')
  @php
  $title = "Contact Us | A.I statics technology";
  @endphp
@endsection
@section('content')
  <section id="hero" data-parallax="scroll" data-image-src="/img/about_us.jpg">
    <div class="backdrop"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center">
            <h1 class="title">Contact Us</h1>
            <span class="sub-title">We Are Here to Deliver A Value to Your Career Profile!!!</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="contactus">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="card shadow wow fadeInUp">
              <div class="card-body">
                <h4 class="card-title">Send us a message</h4>
                <form class="" action="" method="post">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject">
                  </div>
                  <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg">Send</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15133.936078206978!2d73.799669!3d18.507017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd56c149411578bac!2sAI+Statics+solutions!5e0!3m2!1sen!2sin!4v1555928064082!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <p class="contact-details">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                A.I.Statics Solutions,
                Office No. 305, 3rd Floor,
                Pandurang Apartment,
                Near City Hospital,
                Kachara Depo,
                Kothrud, Pune. Pincode – 411 038
              </span>
            </p>
            <p class="contact-details">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                (+91) 99 75 70 7273
              </span>
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
