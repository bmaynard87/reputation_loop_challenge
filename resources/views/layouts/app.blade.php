<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reputation Loop Test - @yield('title')</title>

    <link rel="stylesheet" href="/css/foundation/css/foundation.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>
<body>
    @include('layouts.header')
    <main id="content">
        @yield('content')
    </main>
    @include('layouts.footer')
    <script   src="https://code.jquery.com/jquery-3.1.0.slim.min.js"   integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8="   crossorigin="anonymous"></script>
    <script src="/css/foundation/js/app.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>