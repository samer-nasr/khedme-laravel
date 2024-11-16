<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumbing Services - Khedme</title>
    <link rel="stylesheet" href="{{asset('Khedme/css/service.css')}}">
</head>

<body>

    <!-- Navigation with Logo -->
    <nav>
        <a href="{{route('homePage')}}">
            <img src="{{asset('Khedme/Photos/Logo1.png')}}" class="logo" alt="Logo">
        </a>
    </nav>

    <header class="service-header">
        <h1>{{$service}}</h1>
    </header>

    <section class="filter-section">

        <form action="{{route('search',$services[0]->service_type)}}"  method="GET">
            @csrf

            <div class="filter">
                <label style="color: black" for="gender">Gender:</label>
                <select id="gender" name="gender" class="filter-dropdown">
                    <option value="all">All</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="filter">
                <input style="display: flex;" type="submit" value="Search" class="cta-button">
            </div>
        </form>
    </section>

    <div class="center">


        <section class="service-cards" id="service-cards">
            @foreach ($services as $service)
            {{-- <h2 style="color: black">{{$services[1]->first_name}}</h2> --}}
            <div class="card" data-location="beirut" data-gender="female">
                <!-- Profile Picture Upload -->
                <div class="profile-picture-wrapper">
                    <div class="profile-picture" id="profileDisplay">
                        <img src="{{asset('Khedme/Photos/pp.jpg')}}" alt="Profile Picture Preview" id="profilePreview">
                    </div>
                    <input type="file" id="profile-picture" name="profile-picture" accept="image/png"
                        class="profile-input" onchange="previewImage()">
                </div>
                <h3>{{$service->first_name}}</h3>
                <p>{{$service->service_type}}</p>
                <p>{{$service->rate}} $/H</p>
                <p>Rating: {{$service->rating}}</p>
                <a class="cta-button" href="{{route('pay')}}">SE3DNE</a>
            </div>

            @endforeach

        </section>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Khedme | All rights reserved</p>

    </footer>

</body>

</html>
