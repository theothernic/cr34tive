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

        @if (isset($page->subBrand))
        <div class="brand {{ $page->subBrand }}">
            <a href="{{ $page->nav['subbrand'] }}"></a>
        </div>
        @else
        <h1 class="title">{{ $page->title }}</h1>
        @endif

        <div class="brand">
            <a href="{{ route('front') }}" class="home-link"></a>
        </div>
    </header>


    <main class="content">
        <h1 class="headliner">{{ (!empty($page->headline)) ? $page->headline : $page->title }}</h1>


        @yield('content')
    </main>

    <footer id="colophon">
        <div class="col">
            <div class="brand"></div>

            <p>
                &copy; 2023- <a href="{{ $page->nav['author'] ?? '#' }}">Nic Barr</a>.
                All rights reserved. <a href="{{ route('pages.credits') }}">Credits</a>
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
