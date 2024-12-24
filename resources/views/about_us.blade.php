<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - KHEDME</title>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Khedme/css/aboutUs.css')}}">

</head>
<body>

    <!-- Navbar with Logo -->
    <nav>
        <a href="{{ route('homePage') }}">
            <img src="{{ asset('Khedme/Photos/Logo1.png')}}" alt="logo" class="logo">
        </a>
    </nav>

    <!-- Header Section -->
    <div class="header">
        <h1>About Us</h1>
    </div>

    <!-- First Section: Welcome to KHEDME -->
    <div class="content-container">
        <div class="about-us">
            <h2>Welcome to KHEDME – your trusted partner for all home demand services!</h2>
            <p>
                At KHEDME, we are dedicated to simplifying your everyday life by offering a wide range of home services,
                from cleaning and maintenance to specialized repairs. We understand how valuable your time is, which is why
                we strive to provide reliable, high-quality services at the click of a button.
            </p>
        </div>
    </div>

    <!-- Second Section: Our Mission -->
    <div class="content-container mission-section">
        <div class="mission-text">
            <h2>Our Mission</h2>
            <p>
                Our mission is to create a seamless experience for homeowners by offering an array of services that cater to diverse needs.
                We aim to provide quality, affordability, and convenience, all in one platform.
            </p>
        </div>
        <div class="mission-img">
            <img src="{{ asset('Khedme/Photos/image-removebg-preview (1).png')}}" alt="Mission Image">
        </div>
    </div>

    <!-- Third Section: Our Platform -->
    <div class="content-container platform-section">
        <div class="platform-text">
            <h2>Platform</h2>
            <p>
                Our platform connects you with experienced and professional service providers who cater to your specific needs and location, ensuring that you get the best solution for every household task. Whether it's a routine cleaning, electrical work, or plumbing, KHEDME is here to make it hassle-free.
            </p>
        </div>
        <div class="platform-img">
            <img src="{{ asset('Khedme/Photos/image-removebg-preview (6).png')}}" class="animated-img" alt="Platform Image">

        </div>
    </div>

    <!-- Diversity Icons Section -->
    <div class="diversity-icons">
        <img src="{{ asset('Khedme/Photos/Diverse Services.svg')}}" class="animated-icon" alt="Services">

        <h1>
            <span class="D-S">Diverse Services</span><br>
        </h1>
        <img src="{{ asset('Khedme/Photos/Trusted Professionals.svg')}}" class="animated-icon" alt="Services">

        <h1>
            <span class="T-P">Trusted Professionals</span><br>
        </h1>
        <img src="{{ asset('Khedme/Photos/Customer-Centric.svg')}}" class="animated-icon" alt="Services">

        <h1>
            <span class="C-C">Customer-Centric</span><br>
        </h1>
        <img src="{{ asset('Khedme/Photos/Simple and Convenient.svg')}}" class="animated-icon" alt="Services">

        <h1>
            <span class="S-C">Simple and Convenient</span><br>
        </h1>
    </div>

    <footer>
        <p>2024 Khedme | All rights reserved</p>
    </footer>
</body>
</html>
