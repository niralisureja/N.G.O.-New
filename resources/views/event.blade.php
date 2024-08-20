@extends('layout.app')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <div class="row">
      <div class="col-xl-6">
        <h1>Event Page</h1>
        <h2>Streamlining Operations and Maximizing Impact</h2>
        <button id="donate-btn" class="btn-get-started scrollto">Donate</button>
      </div>
    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  
  <!-- ======= Events Section ======= -->
  <section id="events" class="events">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center my-4">Events</h2>
      <div class="row">
        @for ($i = 1; $i <= 30; $i++)
          
        @endfor

        <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{asset('img/11.jpg')}}" class="card-img-top" alt="Event Image" >
              <div class="card-body">
                <h5 class="card-title">Event 1 Title</h5>
                <p class="card-text">Description for event ...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{asset('img/12.jpg')}}" class="card-img-top" alt="Event Image" >
              <div class="card-body">
                <h5 class="card-title">Event 2 Title</h5>
                <p class="card-text">Description for event ...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{asset('img/13.jpg')}}" class="card-img-top" alt="Event Image" >
              <div class="card-body">
                <h5 class="card-title">Event 2 Title</h5>
                <p class="card-text">Description for event ...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{asset('img/14.jpg')}}" class="card-img-top" alt="Event Image" >
              <div class="card-body">
                <h5 class="card-title">Event 2 Title</h5>
                <p class="card-text">Description for event ...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{asset('img/13.jpg')}}" class="card-img-top" alt="Event Image" >
              <div class="card-body">
                <h5 class="card-title">Event 2 Title</h5>
                <p class="card-text">Description for event ...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{asset('img/12.jpg')}}" class="card-img-top" alt="Event Image" >
              <div class="card-body">
                <h5 class="card-title">Event 2 Title</h5>
                <p class="card-text">Description for event ...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{asset('img/13.jpg')}}" class="card-img-top" alt="Event Image" >
              <div class="card-body">
                <h5 class="card-title">Event 2 Title</h5>
                <p class="card-text">Description for event ...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{asset('img/14.jpg')}}" class="card-img-top" alt="Event Image" >
              <div class="card-body">
                <h5 class="card-title">Event 2 Title</h5>
                <p class="card-text">Description for event ...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{asset('img/17.jpg')}}" class="card-img-top" alt="Event Image" >
              <div class="card-body">
                <h5 class="card-title">Event 2 Title</h5>
                <p class="card-text">Description for event ...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section><!-- End Events Section -->

  <!-- ======= Team Section ======= -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Contact</h2>
        <p>If you would like to get in touch with us, please fill out the contact form on our website or email us at admin@ngorganization.in.</p>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>Saint Kabir Road, Rajkot, GJ 360002, India</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>admin@ngorganization.in</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection
