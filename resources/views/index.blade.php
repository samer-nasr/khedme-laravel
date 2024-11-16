<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <title>Khedme - Home Services</title>
    <link rel="stylesheet" href="{{ asset('Khedme/css/styles.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="hero">
            <nav>
                <img src="{{ asset('Khedme/Photos/Logo1.png')}}" class="Logo" alt="logo">


                <ul>
                    <li><a href="{{ route('about_us')}}">About Us</a></li>
                    <li><a href="{{ route('services')}}">Services</a></li>
                    <li><a href=" {{ route('work_with_us')}}">Work with Us</a></li>
                    <li><a href="{{ route('contact_us')}}">Contact Us</a></li>
                    <li>
                        @auth
                        <div>
                            @include('layouts.navigation')
                        </div>
                        @endauth
                    </li>

                </ul>
            </nav>

            <div class="hero-section"></div>
            <div class="title">
                <h1>
                    <span class="nahna">Nahna</span><br>
                    <span class="menzabetlak">Menzabetlak</span>
                </h1>


                @if (Auth::guest())
                <div class="button-container">
                    <a href="{{ route('login') }}" class="btn login-btn">Log In</a>
                    <a href="{{ route('register') }}" class="btn signup-btn">Sign Up</a>
                </div>
                @endif

            </div>

            <div class="img-box">
                {{-- <img src="../Photos/Ciclehomepage1.png" class="back-img"> --}}
                <img src="{{ asset('Khedme/Photos/Ciclehomepage1.png') }}" class="back-img">

                {{-- <img src="../Photos/Homepage1PLUMBER.png" class="main-img"> --}}
                <img src="{{ asset('Khedme/Photos/Homepage1PLUMBER.png') }}" class="main-img">

            </div>
        </div>
        </div>
    </header>

    <div class="download-section">
        <div class="download-content">
            <div class="download-text">
                <h2>Download our app now.</h2>
                <a href="#" class="download-button">Download the App</a>
            </div>
            <div class="download-image">
                <img src="{{asset('Khedme/Photos/mobilephoto.png')}}" alt="App on Mobile">
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Khedme | All rights reserved</p>
        <div class="social-icons">
            <a href="404.html"><img src="{{ asset('Khedme/Photos/tiktok.svg') }}" class="icon" alt="Tiktok"></a>
            <a href="404.html"><img src="{{ asset('Khedme/Photos/instagram.svg') }}" alt="Instagram"></a>
            <a href="404.html"><img src="{{ asset('Khedme/Photos/twitter-x.svg') }}" alt="Twitter"></a>
        </div>
    </footer>

</body>

</html>

{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>


</head>

<body>
    @if (Route::has('login'))
    <nav class="flex justify-end flex-1 -mx-3">
        @auth
        <a href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Dashboard
        </a>
        @else
        <a href="{{ route('login') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Log in
        </a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Register
        </a>
        @endif
        @endauth
    </nav>
    @endif
</body>

</html> --}}
