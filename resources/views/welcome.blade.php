<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>balanorka-shop</title>
    @paddleJS
</head>
<body>
<a
    href='#'
    class='paddle_button'
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

<x-paddle-button :url="$payLink" class="px-8 py-4" data-theme='dark'>
    Subscribe
</x-paddle-button>
</body>
</html>
