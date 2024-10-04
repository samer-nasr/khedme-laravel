<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('Khedme/css/logIn.css')}}">

</head>

<body>
    <div class="login-container">
        <div class="logo">
            <a href="{{ route('homePage')}}">
                <img src="{{ asset('Khedme/Photos/Logo1.png')}}" alt="Logo">
            </a>
        </div>

        <div class="login-image">
            <img src="{{ asset('Khedme/Photos/Loginphoto2.png')}}" alt="Login Image">
        </div>

        <div class="login-form">

            <form action="{{ route('login') }}" method="POST">
                @csrf

                {{-- <label for="email">Email:</label>
                <input type="email" id="email" name="email" required> --}}

                {{-- Email Section --}}
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />



                {{-- <label for="password">Password:</label>
                <input type="password" id="password" name="password" required> --}}

                {{-- Password Section --}}
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />


                {{-- <div class="show-password">
                    <input type="checkbox" id="togglePassword"> Show Password
                </div> --}}

                <!-- Remember Me Section-->
                <div class="block mt-4 show-password">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                    </label>
                </div>

                {{-- <button type="submit" class="login-btn">Login</button> --}}

                {{-- Login Button --}}
                <x-primary-button class="ms-3 login-btn">
                    {{ __('Log in') }}
                </x-primary-button>


                <a href="{{ __('Forgot your password?') }}" class="forgot-password">Forgot Password?</a>

                <!-- New to the app message -->
                <div class="new-user">
                    <p>New to this app? You don't have an account yet. <br> <a href="{{ route('register') }}">Register
                            now</a></p>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer Section -->
    <footer>
        <p> 2024 Khedme | All rights reserved</p>
    </footer>

</body>

</html>
