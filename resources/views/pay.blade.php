<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Interface</title>
<link rel="stylesheet" href="{{asset('Khedme/css/payment.css')}}">
</head>
<body>

    <!-- Navigation with Logo -->
    <nav>
        <a href="{{route('homePage')}}">
            <img src="{{asset('Khedme/Photos/Logo1.png')}}" class="logo" alt="Logo">
        </a>
    </nav>

<div class="container">
    <div class="header">Payment</div>
    <div class="field">
        <div class="label">CARD NUMBER</div>
        <input class="input" type="text" maxlength="4">
        <input class="input" type="text" maxlength="4">
        <input class="input" type="text" maxlength="4">
        <input class="input" type="text" maxlength="4">

    </div>
    <div class="field">
        <div class="label">EXPIRY</div>
        <input class="input" type="text" maxlength="5">
    </div>
    <div class="field">
        <div class="label">CVC</div>
        <input class="input" type="text" maxlength="3">
    </div>
    <button class="pay-button">
        <span class="lock-icon">🔒</span>
        Finish and Pay
    </button>

</div>


</body>
</html>
