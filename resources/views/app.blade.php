<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>balanorka-shop</title>
    @vite('resources/css/app.css')
    @paddleJS
</head>
<body>

<a
    href='#'
    class='paddle_button text-3xl'
    data-theme='dark'
    data-items='[
        {
            "priceId": "pri_01hfeenckde6a0rsbjngra8wzz",
            "quantity": 1
        }
    ]'
>
    Buy now
</a>

{{--<x-paddle />--}}

<x-paddle />
</body>
</html>
