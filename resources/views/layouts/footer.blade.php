<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3 class="footer-title">Trainings</h3>
        <ul class="footer-links">
          @foreach (App\Training::all() as $training)
            <li><a href="">{{$training->name}}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-sm-4">
        <h3 class="footer-title">Events</h3>
        <ul class="footer-links">
          @foreach (App\Event::all() as $event)
            <li><a href="">{{$event->name}}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-sm-4">
        <h3 class="footer-title"><img src="/img/logo_white.png" height="20"/></h3>
        <p>We want your organization to be able to explore and gain meaningful insights from your data. We specialize in teaching your employees to explore the infrastructure we help you create.</p>
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
</footer>
