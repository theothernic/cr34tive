<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title') :: {{ config('app.name') }}</title>


    @vite(['resources/js/web.js'])

    <style type="text/css">

    </style>
</head>
<body>
    <main class="centerstage">
        @yield('content')
    </main>
</body>
</html>
