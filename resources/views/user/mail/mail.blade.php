{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$msg}}</h1>
</body>
</html> --}}
<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
</head>
<body>
    <h1>Thank You for Your Purchase!</h1>
    <p>Product: {{ $productName }}</p>
    <p>Amount: {{ $amount }} {{ $currency }}</p>
    <p>Your payment was successful. Enjoy your product!</p>
</body>
</html>
