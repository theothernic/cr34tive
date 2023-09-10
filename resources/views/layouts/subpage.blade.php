<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title') :: {{ config('app.name') }}</title>

    @vite(['resources/js/web.js'])
</head>
<body>
<div class="ct flex col">
    <header id="masthead">
        <div class="brand noodles"></div>

        <div class="brand">
            <a href="#" class="home-link"></a>
        </div>
    </header>


    <main class="content">
        <h1 class="title">The quick brown fox jumps over the lazy dog.</h1>


        The quick brown fox jumps over the lazy dog.
    </main>

    <footer id="colophon">
        <div class="col">
            <div id="brand">

            <p>
                &copy; 2023- <a href="#">Nic Barr</a>. All rights reserved. <a href="#">Credits</a>
            </p>
        </div>

        <div class="col">
            &nbsp;
        </div>


        <div class="col">
            <a href="#top">Back to top</a>
        </div>
    </footer>
</div>
</body>
</html>
