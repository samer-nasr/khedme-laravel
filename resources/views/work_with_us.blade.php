<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <title>Work With Us</title>
    <link rel="stylesheet" href="{{ asset('Khedme/css/wwu.css')}}">
</head>
<body>

    <!-- Navigation with Logo -->
    <nav>
        <a href="{{ route('homePage') }}">
            <img src="{{ asset('Khedme/Photos/Logo1.png')}}" class="logo" alt="Logo">
        </a>
    </nav>

    <!-- Header Section -->
    <header>
        <div class="hero">
            <div class="title2">
                <h1>
                    <span class="Ta3-chteghel">Ta3 Chteghel</span><br>
                    <span class="ma3na-txt">Ma3na</span>
                </h1>
                <h2>
                    <span class="Beginner-txt">SO SIMPLE EVEN A BEGINNER</span><br>
                    <span class="CANDOIT-txt">CAN DO IT</span>
                </h2>
                <a href="{{ route('join_us') }}">
                    <button class="btn JOINUS-btn">Join Us</button>
                </a>
            </div>

            <div class="img-box">
                <img src="{{ asset('Khedme/Photos/twoemp.png')}}" class="emp-img">


                <img src="{{ asset('Khedme/Photos/dust.png') }}" class="dust-img">

            </div>
        </div>
    </header>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Khedme | All rights reserved</p>
    </footer>

</body>
</html>
