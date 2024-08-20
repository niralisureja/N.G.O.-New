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
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #f9f9f9, #e2e2e2);
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
            max-width: 900px;
            padding: 50px;
            background-color: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.3);
        }

        h1, h2 {
            text-align: center;
            color: #2c3e50;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        h2 {
            font-size: 26px;
            margin-top: 0;
            color: #16a085;
        }

        p {
            text-align: center;
            margin-bottom: 30px;
            color: #7f8c8d;
            font-size: 16px;
        }

        label {
            font-weight: 600;
            color: #34495e;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #bdc3c7;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #16a085;
            box-shadow: 0 0 8px rgba(22, 160, 133, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #16a085;
            border-color: #16a085;
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #138d75;
            border-color: #138d75;
        }

        .btn-primary:focus {
            box-shadow: 0 0 8px rgba(22, 160, 133, 0.5);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Hope Foundation</h1>
        <h2>Monetary Donation</h2>
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
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
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
