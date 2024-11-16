<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Khedme/css/services.css')}}">
</head>
<body>
    <!-- Navigation with Logo -->
    <nav>
        <a href="{{route('homePage')}}">
            <img src="{{asset('Khedme/Photos/Logo1.png')}}" class="logo" alt="Logo">
        </a>
    </nav>

    <!-- Header Section -->
    <div class="header">

    </div>

    <div class="our-services">
        <h1>Our Services</h1>
    </div>

    <!-- Services Section -->
    <div class="services-container">
        <div class="service" onclick="window.location.href='{{ route('service_page','plumber') }}';">
            <img src="{{asset('Khedme/Photos/Plumber.png')}}" alt="Plumber">
            <h2>Plumber</h2>
        </div>
        <div class="service" onclick="window.location.href='{{ route('service_page','cleaner') }}';">
            <img src="{{asset('Khedme/Photos/Cleaner.png')}}" alt="Cleaner">
            <h2>Cleaner</h2>
        </div>
        <div class="service" onclick="window.location.href='{{ route('service_page','electrician') }}';">
            <img src="{{asset('Khedme/Photos/Electrician.png')}}" alt="Electrician">
            <h2>Electrician</h2>
        </div>
        <div class="service" onclick="window.location.href='{{ route('service_page','painter') }}';">
            <img src="{{asset('Khedme/Photos/Painter.png')}}" alt="Painter">
            <h2>Painter</h2>
        </div>
        <div class="service" onclick="window.location.href='{{ route('service_page','pest control specialist') }}';">
            <img src="{{asset('Khedme/Photos/PestControle.png')}}" alt="Pest Control Specialist">
            <h2>Pest Control Specialist</h2>
        </div>
        <div class="service" onclick="window.location.href='{{ route('service_page','hvac technician') }}';">
            <img src="{{asset('Khedme/Photos/HVACtechnician.png')}}" alt="HVAC technician">
            <h2>HVAC Technician</h2>
        </div>
    </div>

    <!-- Search Button -->
    <div class="search-container">
        <button onclick="window.location.href='404.html';">Search for a Service</button>
    </div>

    <footer>
        <p>&copy; 2024 Khedme | All rights reserved</p>
    </footer>

</body>
</html>
