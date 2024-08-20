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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Hope Foundation - Donation Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
            max-width: 800px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1,
        h2 {
            text-align: center;
            color: #333;
        }

        h1 {
            margin-bottom: 10px;
        }

        h2 {
            margin-top: 0;
            font-size: 24px;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        .btn-primary {
            background-color: #d9534f;
            border-color: #d9534f;
        }

        .btn-primary:hover {
            background-color: #c9302c;
            border-color: #c9302c;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Hope Foundation.</h1>
        <h2>MONETARY DONATION</h2>
        <p>Your monetary donation can help us continue to provide vital programs and services to those in need. Whether you choose to make a one-time donation or set up a recurring donation, every contribution makes a meaningful impact in the community.</p>
        <form action="YOUR_ACTION_URL" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="mobile_number">Mobile Number</label>
                    <input type="tel" class="form-control" id="mobile_number" name="mobile_number" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="whatsapp_number">Whatsapp Number</label>
                    <input type="tel" class="form-control" id="whatsapp_number" name="whatsapp_number">
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="aadhar_number">Aadhar Number</label>
                    <input type="text" class="form-control" id="aadhar_number" name="aadhar_number">
                </div>
                <div class="form-group col-md-6">
                    <label for="passport_number">Passport Number</label>
                    <input type="text" class="form-control" id="passport_number" name="passport_number">
                </div>
            </div>
            <div class="form-group">
                <label for="donation_amount">Amount you want to Contribute</label>
                <input type="number" class="form-control" id="donation_amount" name="donation_amount" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea class="form-control" id="message" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Donate</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
</main><!-- End #main -->

@endsection