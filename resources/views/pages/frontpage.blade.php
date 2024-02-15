@extends('layouts.centerstage')
@section('page.title', $page->title ?? 'frontpage')

@section('content')
    <div class="frontpage">
        <div class="brand"></div>

        <div class="columns">
            <div class="col">
                <div class="site">
                    <div class="brand noodles small">
                        <a class="brand-link" href="{{ route('noodles.index') }}"></a>
                    </div>

                    <p class="description">
                        These aren't your usual noods, friend.
                    </p>
                </div>

            </div>

            <div class="col">
                <div class="site">
                    <div class="brand stationery small">
                        <a class="brand-link" href="{{ route('stationery.index') }}"></a>
                    </div>

                    <p class="description">
                        A database of stationery I've collected.
                    </p>
                </div>
            </div>
        </div>

        <p>
            Made with <span class="heart">&hearts;</span> by <a href="{{ $page->nav['author'] ?? '#' }}">Nic Barr</a>.
            &copy; {{ date('Y') }} All rights reserved. <a href="{{ route('pages.credits') }}">Credits</a>
        </p>
    </div>
@endsection
