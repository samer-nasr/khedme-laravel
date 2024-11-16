<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <title>Contact Us Page</title>
    <link rel="stylesheet" href="{{asset('Khedme/css/contactUs.css')}}">
</head>

<body>

    <div class="container">
        <!-- Left Section with Logo and Image -->
        <div class="left-section">
            <div class="logo">
                <a href="{{route('homePage')}}">
                    <img src="{{asset('Khedme/Photos/Logo1.png')}}" alt="Khedme Logo">
                </a>
            </div>
            <div class="contact-image">
                <img src="{{asset('Khedme/Photos/Contact_us.png')}}" alt="Contact Us Image">
            </div>
        </div>

        <!-- Right Section with Contact Details -->
        <div class="right-section">
            <h1>Contact Us Now</h1>

            <!-- Phone Section -->
            <div class="contact-phone">
                <h2>Phone</h2>
                <p>1125</p>
            </div>

            <!-- Email Section -->
            <div class="contact-Email">
                <h2>Email</h2>
                <p>Customer@Khedme.com</p>
            </div>

            <!-- Social Media Section -->
            <div class="contact-Social">
                <h2>Social</h2>
                <div class="social-icons">
                    <a href="404.html"><img src="{{asset('Khedme/Photos/facebook.svg')}}" class="icon" alt="Facebook"></a>
                    <a href="404.html"><img src="{{asset('Khedme/Photos/instagram.svg')}}" class="icon" alt="Instagram"></a>
                    <a href="404.html"><img src="{{asset('Khedme/Photos/twitter-x.svg')}}" class="icon" alt="Twitter"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Khedme | All rights reserved</p>
    </footer>
</body>

</html>
