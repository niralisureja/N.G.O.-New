@extends('layout.main')
@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NGO Management System</title>
  <!-- Link to the external CSS file -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/modelbox.css') }}">
  <!-- Add other required CSS or meta tags here -->
</head>
<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>NGO Management System</h1>
          <h2>Streamlining Operations and Maximizing Impact</h2>
          <button id="donate-btn" class="btn-get-started scrollto">Donate</button>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Our NGO</h2>
        </div>
        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>New Hope Foundation<span style="color: #e03a3c;">.</span></h3>
              <p>Saint Kabir Road<br>Rajkot<br>GJ 360002<br>India</p>
              <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Collect Donation</h4>
                  <p>We rely on the generosity of our supporters to fund our programs and services, and we make it as easy as possible for individuals to contribute.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Donation Management</h4>
                  <p>Our donation management system allows us to track donations, receipts, and reports that measure the effectiveness of our fundraising efforts.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Distribution Management</h4>
                  <p>We take great care to ensure that the resources we provide are distributed efficiently and effectively, reaching those who need them most.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Various Events</h4>
                  <p>We also collaborate with other organizations and community groups to create meaningful partnerships and expand our reach.</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Our Contribution</h2>
          <p>Our NGO is dedicated to making a positive impact in the community by providing programs and services that address the unique needs of individuals and families. We are committed to outreach and raising awareness about the resources available to those in need, and we rely on the generosity of our supporters to fund our initiatives.</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Dolor Sitema</a></h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Nemo Enim</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>
        <ul class="faq-list accordion" data-aos="fade-up">
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">What is the role of NGO?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>NGOs or non-government organizations play a critical role in the development of society by promoting advocacies targeted to effect change on a local or larger scale. The roles of NGOs vary widely from development, operation, innovation, technical assistance, training, and implementation of different advocacies.</p>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">What are the minimum members required to register an NGO?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>The minimum members required to register an NGO is 3 if it is a Trust. It is not necessary to have all 3 members from different states. If you are registering a Society, you must have a minimum of 7 members from seven different states of India.</p>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">What are the primary posts involved in an NGO?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>An NGO typically has 3 main posts: President, General Secretary, and Treasurer. An NGO can also have many other members or workers. The member can have a designation of Director, Member, Active Member, etc.</p>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">How can I start an NGO in India?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>The first step in starting an NGO in India is to identify the cause that you want to support. Once you have identified the cause, you need to prepare a business plan that outlines the goals and objectives of the NGO. Then, you need to register the NGO as a legal entity. This can be done by registering the NGO as a society, trust, or non-profit company. Finally, you need to raise funds and start working towards achieving your goals.</p>
            </div>
          </li>
        </ul>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Saint Kabir Road, Rajkot, GJ 360002, India</p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@newhopefoundation.org</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 12345 67890</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
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

  <!-- Include any required JavaScript files here -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

@endsection
