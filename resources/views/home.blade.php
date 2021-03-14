<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello-City</title>

    </head>
    <body class="antialiased">
        <h1>Hello From Nancy</h1>

        <p>Its currently {{date('h:i')}}</p>

        <footer>
            &copy;Copy Right {{date('Y')}}  selim ozkan &mid; <a href="/about-us">About Us</a>
        </footer>
    </body>
</html>
