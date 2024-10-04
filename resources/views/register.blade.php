<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{ asset('Khedme/css/register.css')}}">

</head>

<body>
    <div class="register-container">
        <!-- Left Section with Cleaner Image -->
        <div class="left-section">
            <img src="{{ asset('Khedme/Photos/Cleanergirl.png')}}" alt="Cleaner Image" class="cleaner-img">
            <div class="dust"></div>
        </div>

        <!-- Right Section with Registration Form -->
        <div class="right-section">
            <h1>Register</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <!--First Name -->
                <div>
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" class="block w-full mt-1" type="text" name="first_name"
                        :value="old('first_name')" required autofocus autocomplete="first_name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!--Last Name -->
                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" class="block w-full mt-1" type="text" name="last_name"
                        :value="old('last_name')" required autocomplete="last_name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Phone -->
                <div class="mt-4">
                    <x-input-label for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')"
                        required autocomplete="username" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Address -->
                <div class="mt-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <x-text-input id="address" class="block w-full mt-1" type="text" name="address"
                        :value="old('address')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <button type="submit" class="register-btn">Register</button>
            </form>
        </div>
    </div>

    <!-- Footer Section -->


</body>

</html>
